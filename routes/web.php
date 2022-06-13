<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Dimas Abimanyu",
        "email" => "dimas@smktelkom-pwt.sch.id",
        "gambar" => "Dimas.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});


use App\Http\Controllers\ContactController;

Route::resource('/contacts', ContactController::class);
