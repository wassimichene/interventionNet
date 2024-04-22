<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserController extends Controller
{
    protected function AddUser(){
        $Roles = ['cdp', 'cds', 'intervenant'];
        return view('addUser', ['Roles' => $Roles]);
    }
}
