<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BookController;

Route::middleware(['throttle:custom'])->get('/', [MainController::class, 'index']);

Route::get('/middleware', function() {
    return 'This is middleware testing';
})->middleware('type');

Route::fallback(function () {
    return '404';
});

Route::post('/create', [BookController::class, 'store']);
Route::patch('/create/{book}', [BookController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
