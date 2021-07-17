<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin.dashboard', function () {
    return view('admin.dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('user.home');
})->name('dashboard');

Route::get('/admin', function(){
    return view('admin.index');
})->middleware('CheckUser', 'Auth');

Route::get('redirect', [LoginController::class, 'index'])->name('redirect');


