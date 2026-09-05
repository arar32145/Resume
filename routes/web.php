<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('resume');
})->name('resume');

Route::get('/publication', function () {
    return view('publication');
})->name('publication');
