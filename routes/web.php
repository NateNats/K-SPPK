<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SPPKController;

Route::get('/', [SPPKController::class, 'showTable'])->name('showTable');
Route::get('/apriori', [SPPKController::class, 'letsApriori'])->name('letsApriori');

