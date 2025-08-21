<?php

use Illuminate\Support\Facades\Route;

Route::get('/s', function () {
    return view('guess.guess');
});

// Route untuk menampilkan halaman login
Route::get('/login', function () {
    return view('login.login');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/organisasi', function(){
    return view('organisasi');
});
Route::get('/kalender', function(){
    return view('kalender.kalender');
});
Route::get('/kalenderai', function(){
    return view('kalender.kalender-optimized');
});
Route::get('/', function(){
    return view('beranda');
});