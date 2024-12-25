<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello, World!</h1>";
});

Route::get('/Christmas', function () {
    return "<h1>Merry Christmas , Santa claus HOHO !!!!🦌🎅🎄❄️☃️🎁</h1>";
});
