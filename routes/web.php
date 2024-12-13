<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;


Route::get('/articles/fetch', [ArticleController::class, 'fetch'])->name('articles.fetch');
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/dashboard', [ArticleController::class, 'index'])->name('dashboard');
Route::resource('articles', ArticleController::class);
Route::get('/articles/{id}/visualizar', [ArticleController::class, 'visualizar'])->name('arquivos.visualizar');

Route::put('/articles/{article}/close', [ArticleController::class, 'close'])->name('articles.close');


