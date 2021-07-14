<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');

Route::middleware('loggedin')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'registerView'])->name('register-view');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('admin/dashboard', [PageController::class, 'dashboardOverView'])->name('admin.dashboard');
    Route::get('admin/users', [PageController::class, 'usersLayout'])->name('admin.users');
    Route::get('admin/users/roles', [PageController::class, 'usersLayout'])->name('admin.users.roles');
    Route::get('admin/users/permissions', [PageController::class, 'usersLayout'])->name('admin.users.permissions');
    Route::get('admin/users/tags', [PageController::class, 'usersLayout'])->name('admin.users.tags');
});
