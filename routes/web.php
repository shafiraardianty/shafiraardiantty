<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class,'Login']);
Route::post('/login', [LoginController::class,'LoginProses']);

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/menu', function () {
    return view('page.menu');
});

Route::get('/pesanan', function () {
    return view('page.pesanan');
});

Route::get('/meja', function () {
    return view('page.meja');
});