<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guess.guess');
});

// Route untuk menampilkan halaman login
Route::get('/login', function () {
    return view('login.login');
});

Route::get('/home', function () {
    return view('home.home');
});
