<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'checkRole:admin'])->group(function () {


Route::get('/halaman1', [App\Http\Controllers\HalamanController::class, 'halaman1']);
Route::get('/halaman2', [App\Http\Controllers\HalamanController::class, 'halaman2']);
Route::get('/halaman3', [App\Http\Controllers\HalamanController::class, 'halaman3']);



Route::get('/halaman4', [App\Http\Controllers\HalamanController::class, 'halaman4']);
});