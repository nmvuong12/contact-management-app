<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//
Route::middleware([CheckRole::class . ':guest'])->group(function () {
    Route::get('/home', [DepartmentController::class, 'index'])->name('guest.index');
    Route::get('/show/{id}', [DepartmentController::class, 'showforGuest'])->name('guest.showDepartment');
    Route::get('/staff/search', [StaffController::class, 'search'])->name('guest.searchStaff');
    Route::get('/show/staff/{id}', [StaffController::class, 'showforGuest'])->name('guest.showStaff');
    });

Route::middleware([CheckRole::class . ':staff'])->group(function () {
    Route::get('/dashboard',[StaffController::class, 'showforStaff'])->name('dashboard');
    Route::get('/edit/{id}',[StaffController::class, 'edit'])->name('staff.edit');
    Route::patch('/update/{id}',[StaffController::class, 'update'])->name('staff.update');
    
    });

Route::middleware([CheckRole::class . ':admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.index');
    Route::get('/department', [DepartmentController::class, 'indexAdmin'])->name('admin.department');
    Route::get('/department/create', [DepartmentController::class, 'create'])->name('admin.department.create');
    Route::post('/department/store', [DepartmentController::class, 'store'])->name('admin.department.store');
    Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('admin.department.edit');
    Route::patch('/department/update/{id}', [DepartmentController::class, 'update'])->name('admin.department.update');
    Route::get('/department/show/{id}', [DepartmentController::class, 'showforAdmin'])->name('admin.department.show');
    Route::delete('/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('admin.department.delete');
    //
    Route::get('/staff', [StaffController::class, 'index'])->name('admin.staff');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('admin.staff.create');
    Route::post('/staff/store', [StaffController::class, 'store'])->name('admin.staff.store');
    Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('admin.staff.edit');
    Route::patch('/staff/update/{id}', [StaffController::class, 'update'])->name('admin.staff.update');
    Route::get('/staff/show/{id}', [StaffController::class, 'showforAdmin'])->name('admin.staff.show');
    Route::delete('/staff/delete/{id}', [StaffController::class, 'destroy'])->name('admin.staff.delete');

    //


    });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
