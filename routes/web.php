<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'showLogin');
    Route::post('/login', 'checkLogin');
    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');
    Route::get('/forget-pw', 'showForgetPw');
}); 


Route::controller(BlogController::class)->group(function() {
    Route::get('/index', 'index');
    Route::post('/create', 'create');
    Route::get('/edit', 'edit');
}); 
