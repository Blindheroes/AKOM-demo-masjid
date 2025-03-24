<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\JadwalSholatController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show']);

Route::post('/subscribe', [SubscriberController::class, 'store']);
Route::get('/unsubscribe/{id_subscriber}', [SubscriberController::class, 'destroy']);


Route::get('/demo', [PageController::class, 'demoLandingPage']);

Route::get('/demo/jadwal-sholat', [JadwalSholatController::class, 'index']);
