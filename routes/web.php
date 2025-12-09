<?php

use App\Http\Controllers\StoreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// =============== DASHBOARD PER ROLE ===============
Route::middleware(['auth', 'verified'])->group(function () {
    
    // dashboard default member
    Route::get('/dashboard', function () {
        return view('member.dashboard');
    })->name('dashboard')->middleware('role:member');

    // dashboard admin
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('role:admin')->name('admin.dashboard');

    // dashboard seller
    Route::get('/seller/dashboard', function () {
        return view('seller.dashboard');
    })->middleware('role:seller')->name('seller.dashboard');
});


// =============== PROFILE (global) ===============
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// =============== ADMIN CONTROLLER ===============
Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {
    Route::get('profile', [AdminController::class, 'edit'])->name('admin.profile.edit');
});


// =============== SELLER CONTROLLER ===============
Route::prefix('seller')->middleware(['auth','role:seller'])->group(function () {
    Route::get('profile', [SellerController::class, 'edit'])->name('seller.profile.edit');
});


// =============== MEMBER CONTROLLER ===============
Route::prefix('member')->middleware(['auth','role:member'])->group(function () {
    Route::get('profile', [MemberController::class, 'edit'])->name('member.profile.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/store', [StoreController::class, 'index'])->name('store.index');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Store
Route::get('/store', [StoreController::class, 'index'])->name('store.index');
Route::get('/store/{id}', [StoreController::class, 'show'])->name('store.show');

// Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// Orders
Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrdersController::class, 'show'])->name('orders.show');

require __DIR__.'/auth.php';