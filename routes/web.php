<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::view('/petugas', 'petugas.dashboard')->name('petugas');
Route::resource('buku', BukuController::class)->middleware(['auth', 'cekPetugas']);
Route::resource('users', UserController::class)->middleware(['auth', 'cekPetugas']);
Route::resource('kategori', KategoriController::class)->middleware(['auth', 'cekPetugas']);
