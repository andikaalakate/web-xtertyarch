<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.i');
});

Route::get('/welcome', function () {
    return view('welcome');
});
