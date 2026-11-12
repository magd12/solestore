<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\SneakerController;
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

Route::get('/sneakers', [SneakerController::class, 'index']);
Route::get('/sneakers/{id}', [SneakerController::class, 'show']);
