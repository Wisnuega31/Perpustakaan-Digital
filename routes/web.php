<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isUser;
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

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::prefix('/')->middleware(['auth', isUser::class])->group(function () {
   Route::get('buku', [HomeController::class, 'buku'])->name('user.buku');
   Route::get('buku/{id}', [HomeController::class, 'detailbuku'])->name('user.detailbuku');
   Route::get('peminjaman', [HomeController::class, 'peminjaman'])->name('user.peminjaman');
   Route::post('like/{id}', [HomeController::class, 'like'])->name('user.like');
});

Auth::routes();

Route::prefix('petugas')->middleware(['auth', 'cekPetugas'])->group(function () {
   Route::view('/', 'petugas.dashboard')->name('petugas');
   Route::resource('/buku', BukuController::class);
   Route::resource('/users', UserController::class);
   Route::resource('/kategori', KategoriController::class);
});
