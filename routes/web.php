<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/over', function () {
    return view('over');
});

Route::get('/contact', function () {
    return view('contact');
});
