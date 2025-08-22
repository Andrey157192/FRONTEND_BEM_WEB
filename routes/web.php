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

Route::get('/delpro', function () {
    return view('home.organisasi.delpro');
});

Route::get('/ptm', function () {
    return view('home.organisasi.ptm');
});
Route::get('/dokumentasi', function () {
    return view('guess.dokumentasi.dokumentasi');
});

Route::get('/pengguguman', function () {
    return view('pengguguman.pengguguman');
});