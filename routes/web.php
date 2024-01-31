<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/articles/fetch', [ArticleController::class, 'fetch'])->name('articles.fetch');
Route::get('/', [ArticleController::class, 'index']);
Route::resource('articles', ArticleController::class);
Route::resource('playlists', PlaylistController::class);
Route::resource('playlists.videos', VideoController::class)->shallow();
