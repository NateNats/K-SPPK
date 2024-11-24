<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SPPKController;
use App\Http\Controllers\Api\ApiController;

Route::get('/', [SPPKController::class, 'showTable'])->name('showTable');
Route::get('/doApriori', [ApiController::class, 'executeNotebook'])->name('doApriori');

