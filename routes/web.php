<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home_page');

Route::get('/about', function () {
    return view('about');
})->name('about_page');
