<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is wher  e you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/users',[\App\Http\Controllers\UsersController::class, 'index']);
Route::get('/user/{id}',[\App\Http\Controllers\UsersController::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}',[\App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [\App\Http\Controllers\UsersController::class, 'update'])->name('user.update');
