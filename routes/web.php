<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PelangganController;

// Halaman utama
Route::get('/', [TransaksiController::class, 'index'])->name('dashboard');

// Route transaksi
Route::post('/', [TransaksiController::class, 'store'])->name('transaksi.store');


// Route pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/tambah', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan/tambah', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/hapus/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
