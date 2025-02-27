<?php

use App\Http\Controllers\ExhibitsController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Middleware\IsEmployeeMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name("exhibtis.")->prefix("exhibits")->group(function () {

        Route::get('/', [ExhibitsController::class, 'index'])->middleware(IsAdminMiddleware::class)->name('index');

    });
});

require __DIR__.'/auth.php';
