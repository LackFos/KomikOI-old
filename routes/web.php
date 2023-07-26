<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\BacaController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\DetailController;
use App\Http\Controllers\Pages\ArchiveController;
use App\Http\Controllers\Pages\BookmarkController;

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

Route::get('/', HomeController::class);
Route::get('/baca/{slug}', BacaController::class)->where('slug', '.*');
Route::get('/detail/{slug}', DetailController::class);
Route::get('/genre/{slug}', [ArchiveController::class, 'byGenre']);

Route::post('/bookmark/add/{id}', [BookmarkController::class, 'create']);
Route::post('/bookmark/delete/{id}', [BookmarkController::class, 'delete']);