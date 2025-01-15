<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello, World!</h1>";
});

Route::get('/Christmas', function () {
    return "<h1>Merry Christmas , Santa claus HOHO !!!!🦌🎅🎄❄️☃️🎁</h1>";
});


Route::get('/LaravelForm',
[LaravelFormController::class, 'showForm']);

Route::post('/LaravelForm',
[LaravelFormController::class, 'showForm']);
