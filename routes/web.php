<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [AuthController::class, 'index']);
Route::get('home', [AuthController::class, 'home'])->name('home');
Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.store');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');