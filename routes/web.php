<?php

use App\Http\Controllers\googleAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/auth/google', [googleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [googleAuthController::class, 'handleGoogleCallback']);
Route::post('/auth/logout', [googleAuthController::class, 'logout'])->name('google.logout');
