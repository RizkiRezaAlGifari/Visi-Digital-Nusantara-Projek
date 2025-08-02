<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/layanan', [PageController::class, 'layanan']);
