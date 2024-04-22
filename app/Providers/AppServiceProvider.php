<?php

namespace App\Providers;



use App\Rules\MatriculeValidationRule;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Register the custom validation rule
        $this->app['validator']->extend('matricule', function ($attribute, $value, $parameters, $validator) {
            $rule = new MatriculeValidationRule;
            return $rule->passes($attribute, $value);
        });
    }
}
