<?php
// app/Rules/MatriculeValidationRule.php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MatriculeValidationRule implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the value is numeric and has a maximum length of 5 characters
        return is_numeric($value) && strlen((string) $value) <= 5;
    }

    public function message()
    {
        return 'The :attribute field must be a numeric value and not exceed 5 characters.';
    }
}
