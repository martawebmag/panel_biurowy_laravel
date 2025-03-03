<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['role:superadmin'])->group(function () {
    Route::get('/superadmin', [RoleController::class, 'role'])->name('superadmin-dashboard');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [RoleController::class, 'role'])->name('admin-dashboard');
});

Route::middleware(['role:koordynator'])->group(function () {
    Route::get('/koordynator', [RoleController::class, 'role'])->name('koordynator-dashboard');
});