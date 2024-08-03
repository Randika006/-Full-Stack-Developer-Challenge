<?php

use App\Http\Controllers\BusinessCardController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/business-card/create', [BusinessCardController::class, 'create'])->name('business-card.create');
Route::post('/business-card', [BusinessCardController::class, 'store'])->name('business-card.store');



Route::get('/card', [BusinessCardController::class, 'index']);


Route::get('/show-card', [BusinessCardController::class, 'display']);

Route::get('delete-card/{id}', [BusinessCardController::class, 'destroy']);




