<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home')
        ->with('metaTitle', 'KomikOI | Baca Komik Bahasa Indonesia')
        ->with('hasHeader', true)
        ->with('hasFooter', true);
});