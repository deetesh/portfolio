<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;



Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'showLogin');
    Route::post('/login', 'checkLogin');
    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');
    Route::get('/forget-pw', 'showForgetPw');
    Route::get('/logout', 'logout');
}); 


Route::controller(BlogController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create_blog', 'save');
    Route::get('/edit/{id}', 'edit');
    Route::post('/edit_blog/{id}', 'editBlog');
    Route::get('/show', 'preview');
    Route::get('/delete/{id}', 'delete');
    Route::get('/preview/{id}', 'preview');
})->middleware(AuthMiddleware::class); 

Route::get('/contact', function () {
    return view('pages.contact');
});