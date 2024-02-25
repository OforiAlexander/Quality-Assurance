<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\NewReportsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::get('/reports', [ReportsController::class, 'index'])->middleware('auth')->name('reports');

Route::post('/reports/store',[ReportsController::class, "store"]);

Route::get('/dashboard', [UsersController::class, "dashboard"])->middleware(['auth', 'verified', 'role:user'])->name('dashboard');

Route::get('/new', [NewReportsController::class, 'index'])->name('new');

Route::get('/users', [UsersController::class, 'create'])->middleware('role:admin')->name('users');

Route::post('/users/store', [UsersController::class, 'store'])->middleware('role:admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'role:admin'])->name('admin');

require __DIR__.'/auth.php';
