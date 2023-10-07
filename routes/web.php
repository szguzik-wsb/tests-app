<?php

use Illuminate\Support\Facades\Route;




Route::get('/', array(\App\Http\Controllers\HomeController::class, 'index'));
Route::get('/show', [\App\Http\Controllers\HomeController::class, 'show']);
