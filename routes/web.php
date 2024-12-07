<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('home');
});

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/rating', [MovieController::class, 'rating'])->name('movies.rating');




