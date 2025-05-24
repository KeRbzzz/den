<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/orders/{order}/edit', [DashboardController::class, 'editOrder'])->name('orders.edit');
Route::put('/orders/{order}', [DashboardController::class, 'updateOrder'])->name('orders.update');




// Post routes
Route::get('/posts/{post}/edit', [DashboardController::class, 'editPost'])->name('posts.edit');
Route::put('/posts/{post}', [DashboardController::class, 'updatePost'])->name('posts.update');

// Order routes
Route::get('/orders/{order}/edit', [DashboardController::class, 'editOrder'])->name('orders.edit');
Route::put('/orders/{order}', [DashboardController::class, 'updateOrder'])->name('orders.update');


// Dashboard routes
Route::middleware(['auth'])->group(function () {
    // Dashboard main
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    // Post routes
    Route::post('/posts', [DashboardController::class, 'storePost'])->name('posts.store');
    Route::delete('/posts/{post}', [DashboardController::class, 'destroyPost'])->name('posts.destroy');

    // Order routes
    Route::post('/orders', [DashboardController::class, 'storeOrder'])->name('orders.store');
    Route::delete('/orders/{order}', [DashboardController::class, 'destroyOrder'])->name('orders.destroy');

    // Clear routes
    Route::delete('/orders/{order}', [DashboardController::class, 'destroyOrder'])->name('orders.destroy');
    Route::post('/dashboard/clear', [DashboardController::class, 'clear'])->name('dashboard.clear');
    Route::post('/dashboard/clear/posts', [DashboardController::class, 'clearPosts'])->name('dashboard.clear.posts');
    Route::post('/dashboard/clear/orders', [DashboardController::class, 'clearOrders'])->name('dashboard.clear.orders');
    Route::post('/dashboard/clear/users', [DashboardController::class, 'clearUsers'])->name('dashboard.clear.users');
});

// Posts routes
Route::post('/posts', [App\Http\Controllers\DashboardController::class, 'storePost'])->name('posts.store');
Route::delete('/posts/{post}', [App\Http\Controllers\DashboardController::class, 'destroyPost'])->name('posts.destroy');

// Orders routes
Route::post('/orders', [App\Http\Controllers\DashboardController::class, 'storeOrder'])->name('orders.store');
Route::delete('/orders/{order}', [App\Http\Controllers\DashboardController::class, 'destroyOrder'])->name('orders.destroy');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/clear', [DashboardController::class, 'clear'])->name('dashboard.clear');
Route::post('/dashboard/clear/posts', [DashboardController::class, 'clearPosts'])->name('dashboard.clear.posts');
Route::post('/dashboard/clear/orders', [DashboardController::class, 'clearOrders'])->name('dashboard.clear.orders');
Route::post('/dashboard/clear/users', [DashboardController::class, 'clearUsers'])->name('dashboard.clear.users');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
