<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\googleAuthController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\JadwalSholatController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/auth/google', [googleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [googleAuthController::class, 'handleGoogleCallback']);
Route::post('/auth/logout', [googleAuthController::class, 'logout'])->name('google.logout');

Route::get('/demo', [PagesController::class, 'index']);
Route::get('/demo/jadwal-sholat', [JadwalSholatController::class, 'index']);
