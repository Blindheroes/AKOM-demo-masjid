<?php

use App\Filament\Resources\NewsResource;
use App\Filament\Resources\UpcomingEventResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\googleAuthController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\JadwalSholatController;
use App\Http\Controllers\PagesController;
use App\Models\UpcomingEvent;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/auth/google', [googleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [googleAuthController::class, 'handleGoogleCallback']);
Route::post('/auth/logout', [googleAuthController::class, 'logout'])->name('google.logout');

Route::get('/', [PagesController::class, 'index']);
Route::get('/jadwal-sholat', [JadwalSholatController::class, 'index']);


// upcoming event
Route::prefix('event')->group(function () {
    Route::get('/{slug}', [UpcomingEventResource::class, 'getEvent'])->name('event.upcoming.show');
    Route::get('/upcoming', [UpcomingEventResource::class, 'getUpcomingEvents'])->name('event.upcoming');
    Route::get('/upcoming/all', [UpcomingEventResource::class, 'getAllUpcomingEvents'])->name('event.upcoming.all');
    Route::get('/past', [UpcomingEventResource::class, 'getPastEvents'])->name('event.past');
    Route::get('/past/all', [UpcomingEventResource::class, 'getAllPastEvents'])->name('event.past.all');
});


// news
Route::prefix('news')->group(function () {
    Route::get('/{slug}', [NewsResource::class, 'getNews'])->name('news.show');
    Route::get('/', [NewsResource::class, 'getLatestNews'])->name('news.index');
    Route::get('/all', [NewsResource::class, 'getAllNews'])->name('news.all');
});
