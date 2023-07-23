<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\BookmarkController;

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
Route::post('/bookmark/add/{id}', [BookmarkController::class, 'create']);
Route::post('/bookmark/delete/{id}', [BookmarkController::class, 'delete']);