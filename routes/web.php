<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [ArticleController::class, 'index']);
Route::resource('articles', ArticleController::class);
Route::resource('playlists', PlaylistController::class);
Route::resource('playlists.videos', VideoController::class)->shallow();
