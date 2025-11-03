<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('Mahasiswa', MahasiswaController::class);
