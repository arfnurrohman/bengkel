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
    });

Route::middleware(['auth', 'checkRole:admin,user'])->group(function () { 
Route::get('/halaman3', [App\Http\Controllers\HalamanController::class, 'halaman3']);
 });

 Route::get('/datauser',[App\Http\Controllers\UserController::class, 'datauser']);
 Route::get('/fromuser', [App\Http\Controllers\UserController::class, 'formuser']);
 Route::post('/adduser', [App\Http\Controllers\UserController::class, 'adduser']); 
 Route::get('/datauser/{id}', [App\Http\Controllers\UserController::class, 'edituser']);
 Route::post('/updateuser', [App\Http\Controllers\UserController::class, 'updateuser']);
 Route::get('/deleteuser/{id}', [App\Http\Controllers\UserController::class, 'deleteuser']);

 Route::get('/databengkel',[App\Http\Controllers\BengkelController::class, 'databengkel']);
 Route::get('/formbengkel', [App\Http\Controllers\BengkelController::class, 'formbengkel']);
 Route::post('/addbengkel', [App\Http\Controllers\BengkelController::class, 'addbengkel']); 
 Route::get('/databengkel/{id}',[App\Http\Controllers\BengkelController::class, 'editbengkel']);
 Route::post('/updatebengkel',[App\Http\Controllers\BengkelController::class, 'updatebengkel']);
 Route::get('/deletebengkel/{id}',[App\Http\Controllers\BengkelController::class, 'deletebengkel']);
 Route::get('/halaman4', [App\Http\Controllers\HalamanController::class, 'halaman4']);
