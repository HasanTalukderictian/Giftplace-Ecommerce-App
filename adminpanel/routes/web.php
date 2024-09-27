<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});


    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/admin/user', [AdminController::class, 'showUserList'])->name('admin.user');
    Route::post('/users', [AdminController::class, 'store'])->name('users.store');
    Route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
    Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


    // Product Route

    Route::get('/products', [ProductController::class, 'show'])->name('product.show');

// Brands

Route::get('/brands', [ProductController::class, 'brands'])->name('product.brands');
Route::post('/add-brands', [BrandController::class, 'store'])->name('brands.store');
Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');


//Categories

Route::get('/categories', [ProductController::class, 'categories'])->name('product.categories');
Route::post('/add-categories', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/del-categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


