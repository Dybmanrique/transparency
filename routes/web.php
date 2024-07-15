<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/numeral-11-ley-universitaria', [WelcomeController::class, 'numerals'])->name('numerals');
