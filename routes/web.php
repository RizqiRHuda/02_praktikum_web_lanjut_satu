<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "Nama     : Rizqi Rohmatul Huda" . "<br>";
    echo "NIM       : 2141720264";
});

Route::get('/articles/{id?}', function ($id=1) {
    return "Halaman Artikel " . $id;
});
