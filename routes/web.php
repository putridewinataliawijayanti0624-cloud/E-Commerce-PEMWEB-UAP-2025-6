<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

// ================= AUTH =================
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // Store
    Route::get('/store', [StoreController::class, 'index'])
        ->name('store.index');
    Route::get('/store/{id}', [StoreController::class, 'show'])
        ->name('store.show');

    // Category
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])
        ->name('categories.show');

    // Orders
    Route::get('/orders', [OrdersController::class, 'index'])
        ->name('orders.index');
    Route::get('/orders/{id}', [OrdersController::class, 'show'])
        ->name('orders.show');
});

// ================= ROLE =================
Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {
    Route::get('/profile', [AdminController::class, 'edit'])
        ->name('admin.profile.edit');
});

Route::prefix('seller')->middleware(['auth','role:seller'])->group(function () {
    Route::get('/profile', [SellerController::class, 'edit'])
        ->name('seller.profile.edit');
});

Route::prefix('member')->middleware(['auth','role:member'])->group(function () {
    Route::get('/profile', [MemberController::class, 'edit'])
        ->name('member.profile.edit');
});

require __DIR__.'/auth.php';