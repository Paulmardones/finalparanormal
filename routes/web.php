<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/historias', function () {
    return view('historias');
})->name('historias');

Route::get('/historiasfamosas', function () {
    return view('historiasfamosas');
})->name('historiasfamosas');
