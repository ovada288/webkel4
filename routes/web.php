<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/berita1', function () {
    return view('berita1'); // Mengarahkan ke file berita1.blade.php
})->name('berita1.news1'); 




Route::get('/berita2', function () {
    return view('berita2'); // Arahkan ke file berita2.blade.php
})->name('berita2.news1');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/players', function () {
    return view('player'); // Memanggil file player.blade.php
})->name('player.list');


// routes/web.php

 
Route::get('/opmem', function () {
    return view('opmem');
});

