<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');

Route::get('/contacts',[MainController::class,'contacts'])->name('contacts');

Route::get('/catalog/karkasson', [MainController::class, 'karkasson'])->name('karkasson');

Route::get('/catalog/machicoro', [MainController::class, 'machikoro'])->name('machikoro');

Route::get('/catalog/manchkin', [MainController::class, 'manchkin'])->name('manchkin');

Route::post('/contacts/form', [MainController::class, 'form']);
