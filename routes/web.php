<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AdminController;

Route::get('/', [ProdukController::class, 'index'])->name('home');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

Route::get('/kontak', [KontakController::class, 'create'])->name('kontak.create');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Routes untuk CMS Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.messages');
