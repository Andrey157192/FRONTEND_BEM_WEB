<?php

use Illuminate\Support\Facades\Route;

Route::get('/contoh', function () {
    return view('guess.guess');
});
Route::get('/home', function () {
    return view('home.home');
});
Route::get('/loginn', function () {
    return view('login.login');
});

// branch andika
// beranda
Route::get('/', function(){
    return view('beranda');
});

// login
Route::get('/login', function () {
    return view('login');
});

// ormawa
Route::get('/organisasi', function(){
    return view('organisasi');
});

// detail ormawa
Route::get('/detail-organisasi', function(){
    return view('detail-organisasi');
});

// berita
Route::get('/berita', function(){
    return view('berita');
});

// detail berita
Route::get('/detail-berita', function(){
    return view('detail-berita');
});

// pengumuman
Route::get('/pengumuman', function(){
    return view('pengumuman');
});

// detail pengumuman
Route::get('/detail-pengumuman', function(){
    return view('detail-pengumuman');
});

// sturuktur organisasi
Route::get('/struktur-organisasi', function(){
    return view('struktur-organisasi');
});

// visi misi
Route::get('/visi-misi', function(){
    return view('visi-misi');
});

// kalender
Route::get('/kalender', function(){
    return view('kalender');
});