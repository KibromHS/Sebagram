<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('p.create');
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store'])->name('p.store');

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('p.show');