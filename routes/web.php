<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/numeral-11-ley-universitaria', [WelcomeController::class, 'numerals'])->name('numerals');
Route::get('/indicador-cbc', [WelcomeController::class, 'indicador_cbc'])->name('indicador_cbc');
Route::get('/informacion/{information}', [WelcomeController::class, 'information'])->name('information');
Route::get('/documentos/{document}', [WelcomeController::class, 'document'])->name('document');
