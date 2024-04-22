<?php

use App\Http\Controllers\AddUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/login', 301);




Route::controller(AuthenController::class)->group(function(){
   // Route::get('/registration','registration')->middleware('alreadyLoggedIn');
          //Route::post('/registration-user','registerUser')->name('register-user');
    Route::get('/login','login')->middleware('alreadyLoggedIn');
          Route::post('/login-user','loginUser')->name('login-user');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::get('/logout','logout');
});

Route::controller(AddUserController::class)->group(function(){
    Route::get('/adduser', 'addUser')->middleware('isLoggedIn');;
});


Route::middleware('isLoggedIn',)->group(function(){
    Route::get('/adduser', [AddUserController::class, 'addUser']);

});

Route::middleware('shouldConnect',)->group(function(){
    Route::get('/adduser', [AddUserController::class, 'addUser']);

});
