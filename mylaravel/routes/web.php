<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/register',
    [RegisterController::class, 'index']);

Route::get('/home',
    [HomeController::class, 'index']);

Route::get('/',
    [HomeController::class, 'index']);


Route::get('/', function () {
    return view('home');
});



/*
Route::get('/hello', function () {
    return "<h1>Hello, World!</h1>";
});
*/

/*
Route::get('/Christmas', function () {
    return "<h1>Merry Christmas , Santa claus HOHO !!!!🦌🎅🎄❄️☃️🎁</h1>";
});
*/

Route::get('/LaravelForm',
[LaravelFormController::class, 'showForm']);

Route::post('/LaravelForm',
[LaravelFormController::class, 'showForm']);


