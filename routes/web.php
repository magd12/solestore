<?php

use App\Http\Controllers\BrandController;
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

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brands/{id}', [BrandController::class, 'show']);
