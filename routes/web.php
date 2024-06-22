<?php

use App\Models\Brand;
use Illuminate\Support\Facades\Route;

Route::get('/tt', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts.backend');
})-> middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tambah dibawah ini
Route::resource('brand', App\Http\Controllers\brandController::class)->middleware('auth');

Route::get('/data', function () {
    return view('data');
});
