<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware([CheckRole::class . ':guest'])->group(function () {
    Route::get('/home', [DepartmentController::class, 'index'])->name('guest.index');
    Route::get('/show/{id}', [DepartmentController::class, 'showforGuest'])->name('guest.showDepartment');
    Route::get('/show/staff/{id}', [StaffController::class, 'showforGuest'])->name('guest.showStaff');
    });

Route::middleware([CheckRole::class . ':staff'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

Route::middleware([CheckRole::class . ':admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.index');
    });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
