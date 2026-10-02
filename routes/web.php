<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front-index');

Route::get('detail/{id}/{category_id}', [App\Http\Controllers\FrontController::class, 'detail'])->name('front-detail');

Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin-index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
