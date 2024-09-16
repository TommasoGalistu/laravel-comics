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

    $cards = config('dataCard');
    return view('home', compact('cards'));
})->name('home');

Route::get('/comics', function () {
    return view('comic');
})->name('comic');
Route::get('/movies', function () {
    return view('movie');
})->name('movie');


