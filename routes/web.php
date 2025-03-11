<?php

use App\Http\Controllers\ExhibitsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UsersController;
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

    Route::name("tours.")->prefix("home")->group(function () {

        Route::get('/', [ToursController::class, 'home'])->name('home');

    });

    Route::name("Tours.")->prefix("tours")->group(function () {

        Route::get('/', [ToursController::class, 'index'])->middleware(IsAdminMiddleware::class)->name('index');
        Route::get('/create', [ToursController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');
        Route::post('/', [ToursController::class, 'store'])->middleware(IsAdminMiddleware::class)->name('store');
        Route::get('/edit/{tour}', [ToursController::class, 'edit'])->middleware(IsAdminMiddleware::class)->name('edit');
        Route::post('/update/{tour}', [ToursController::class, 'update'])->middleware(IsAdminMiddleware::class)->name('update');
        Route::delete('/delete/{tour}', [ToursController::class, 'delete'])->middleware(IsAdminMiddleware::class)->name('delete');

    });


    Route::name("Exhibits.")->prefix("exhibits")->group(function () {

        Route::get('/', [ExhibitsController::class, 'index'])->middleware(IsAdminMiddleware::class)->name('index');
        Route::get('/create', [ExhibitsController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');
        Route::post('/', [ExhibitsController::class, 'store'])->middleware(IsAdminMiddleware::class)->name('store');
        Route::get('/edit/{exhibit}', [ExhibitsController::class, 'edit'])->middleware(IsAdminMiddleware::class)->name('edit');
        Route::put('/update/{exhibit}', [ExhibitsController::class, 'update'])->middleware(IsAdminMiddleware::class)->name('update');
        Route::delete('/delete/{exhibit}', [ExhibitsController::class, 'delete'])->middleware(IsAdminMiddleware::class)->name('delete');
        Route::get('/show/{exhibit}', [ExhibitsController::class, 'show'])->middleware(IsAdminMiddleware::class)->name('show');
    });


    Route::name("Users.")->prefix("users")->group(function () {

        Route::get('/', [UsersController::class, 'index'])->middleware(IsAdminMiddleware::class)->name('index');
        Route::get('/create', [UsersController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');
        Route::post('/', [UsersController::class, 'store'])->middleware(IsAdminMiddleware::class)->name('store');
        Route::get('/edit/{user}', [UsersController::class, 'edit'])->middleware(IsAdminMiddleware::class)->name('edit');
        Route::put('/update/{user}', [UsersController::class, 'update'])->middleware(IsAdminMiddleware::class)->name('update');
        Route::delete('/delete/{user}', [UsersController::class, 'delete'])->middleware(IsAdminMiddleware::class)->name('delete');

    });


});

require __DIR__.'/auth.php';
