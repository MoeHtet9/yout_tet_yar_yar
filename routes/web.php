<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front-index');

Route::get('detail/{id}/{category_id}', [App\Http\Controllers\FrontController::class, 'detail'])->name('front-detail');

Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
    Route::resource('latters', App\Http\Controllers\Admin\LatterController::class);
    Route::resource('knowledges', App\Http\Controllers\Admin\KnowledgeController::class);
    Route::resource('reviews', App\Http\Controllers\Admin\ReviewController::class);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
