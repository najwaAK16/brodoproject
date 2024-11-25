<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('home');
});

Route::get('/event', [EventController::class, 'index'])->name('event');


