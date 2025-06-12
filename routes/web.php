<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'showLogin');
    Route::post('/login', 'checkLogin');
    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');
    Route::get('/forget-pw', 'showForgetPw');
}); 

Route::get('/welcome', function () {
    return view('welcome');
});
