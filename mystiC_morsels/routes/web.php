<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/TampilanProduk', function () {
    return view('TampilanProduk');
});
