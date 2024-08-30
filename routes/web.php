<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PortoController;

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('profile', \App\Http\Controllers\ProfileController::class);
Route::resource('education', \App\Http\Controllers\EducationController::class);
Route::resource('penghargaan', \App\Http\Controllers\PenghargaanController::class);
Route::resource('pengalaman', \App\Http\Controllers\PengalamanController::class);

Route::get('home', [PortoController::class, 'home'])->name('home');
Route::get('about', [PortoController::class, 'about'])->name('about');
