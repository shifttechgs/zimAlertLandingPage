<?php

use App\Http\Controllers\WaitlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/waitlist', [WaitlistController::class, 'submit'])
    ->middleware(['throttle:5,10'])
    ->name('waitlist.submit');


// Placeholder routes for footer links
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');
