<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedBloodCellController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\WhiteBloodCellController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::prefix('admin')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::redirect('/', '/dashboard');
    });

Route::prefix('user')
    ->name('user.')
    ->middleware(['auth', 'role:user'])
    ->group(function () {
        Route::redirect('/', '/dashboard');
        Route::get('seek', function () {
            return 'User Seek';
        })->name('seek');
        Route::resource('red-blood-cells', RedBloodCellController::class);
        Route::resource('white-blood-cells', WhiteBloodCellController::class);
    });