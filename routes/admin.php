<?php

use App\Http\Controllers\Admin\AdminAccessController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChatComponentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest:admin'])->group(function () {
    //Admin Login
    Route::get('/login', [LoginController::class, 'viewLogin'])->name('admin.view.login');
    Route::post('/logins', [LoginController::class, 'handleLogin'])->name('admin.handle.login');

    //Admin Forgot-Password
    Route::get('/forgot-password', [LoginController::class, 'viewForgotPassword'])->name('admin.view.forgot.password');
    Route::post('/forgote-password', [LoginController::class, 'handleForgotPassword'])->name('admin.handle.forgot.password');
});

// Protected for middleware
Route::middleware('auth:admin')->group(function () {

    // Route::get('logout', function () {
    //     Auth::logout();
    //     return redirect()->route('admin.view.login');
    // })->name('admin.handle.logout');

    Route::post('/logout', [DashboardController::class, 'logout'])->name('admin.handle.logout');

    Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('admin.view.dashboard');

    Route::prefix('admin-access')->controller(AdminAccessController::class)->group(function () {
        Route::get('/', 'viewAdminAccessList')->name('admin.view.admin.access.list');
        Route::get('/create', 'viewAdminAccessCreate')->name('admin.view.admin.access.create');
        Route::get('/update/{id}', 'viewAdminAccessUpdate')->name('admin.view.admin.access.update');
        Route::post('/create', 'handleAdminAccessCreate')->name('admin.handle.admin.access.create');
        Route::post('/update/{id}', 'handleAdminAccessUpdate')->name('admin.handle.admin.access.update');
        Route::put('/status', 'handleToggleAdminAccessStatus')->name('admin.handle.admin.access.status');
        Route::get('/delete/{id}', 'handleAdminAccessDelete')->name('admin.handle.admin.access.delete');
    });

    Route::prefix('chat')->controller(ChatComponentController::class)->group(function () {
        Route::get('/', 'viewChat')->name('admin.view.chat.chat');

    });
});
