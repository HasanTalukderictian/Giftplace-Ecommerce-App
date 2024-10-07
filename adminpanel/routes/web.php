<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\fronted\NavbarController as FrontedNavbarController;
use App\Http\Controllers\frontend\NavbarController;
use App\Http\Controllers\MidBannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend Route

Route::get('/', [FrontedNavbarController::class, 'show'])->name('navbar.show');


Route::prefix('admin')->group(function () {
    // Admin Authentication Routes
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/user', [AdminController::class, 'showUserList'])->name('admin.user');
    Route::get('/register', [AdminController::class, 'showRegister'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register.submit');
    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Product Routes
    Route::get('/products', [ProductController::class, 'show'])->name('product.show');

    // Categories
    Route::get('/categories', [ProductController::class, 'categories'])->name('product.categories');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Brands
    Route::get('/brands', [ProductController::class, 'brands'])->name('product.brands');
    Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');
    Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');

    // Products
    Route::get('/product', [ProductController::class, 'products'])->name('products.show');
    Route::post('/product', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/product/view', [ProductsController::class, 'show'])->name('products.view');
    Route::delete('/product/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

    // Client Routes
    Route::get('/client', [ClientController::class, 'show'])->name('clients.show');
    Route::post('/client', [ClientController::class, 'store'])->name('clients.store');
    Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

    // Blog Routes
    Route::get('/blogs', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/view', [BlogController::class, 'index'])->name('blogs.index');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');


    // MidBanner
    // Brands
    Route::get('/midbanner', [MidBannerController::class, 'show'])->name('midbanner.show');
    Route::get('/show-banner', [MidBannerController::class, 'index'])->name('midbanner.index');
    Route::post('/create-banner', [MidBannerController::class, 'store'])->name('midbanner.store');


    //Page display

});

// User CRUD outside of admin
Route::post('/users', [AdminController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');

// Page display


Route::get('/banner', [BannerController::class, 'index'])->name('banner.show');
Route::get('/create-banner', [BannerController::class, 'createbanner'])->name('banner.create');
Route::post('/add-banner', [BannerController::class, 'store'])->name('banner.store');
Route::delete('/del-banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');


