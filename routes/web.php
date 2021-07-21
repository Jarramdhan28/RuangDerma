<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PribadiController;
use App\Http\Controllers\Admin\YayasanController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('user.home');
})->name('dashboard');

Route::get('/admin', function(){
    return view('admin.index');
})->middleware('CheckUser', 'Auth');

Route::get('redirect', [LoginController::class, 'index'])->name('redirect');

// Route Blade Admin
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin-donasi-barang', function () {
    return view('admin.donasiBarang');
});



// Admin Pengguna Admin
Route::get('/admin-pengguna-admin', [AdminController::class, 'index']);

// Admin Pengguna Pribadi
Route::get('/admin-pengguna-pribadi', [PribadiController::class, 'index']);
Route::delete('/admin-pengguna-pribadi/{id}', [PribadiController::class, 'destroy']);

// Admin Pengguna Yayasan
Route::get('/admin-pengguna-yayasan', [YayasanController::class, 'index']);
