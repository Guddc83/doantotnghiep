<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\CategoryController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\CustomerController;
use App\Http\Controllers\client\PageController;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/',          [PageController::class, 'index'])->name('homepage');
Route::get('/product',   [ProductController::class, 'index'])->name('product');
Route::get('/category',  [CategoryController::class, 'index'])->name('category');
Route::get('/cart',      [CartController::class, 'index'])->name('cart');
Route::get('/checkout',  [CheckoutController::class, 'index'])->name('checkout');
Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
Route::get('/login',     [CustomerController::class, 'index'])->name('login');
Route::get('/wishlist',  [WishlistController::class, 'index'])->name('wishlist');
Route::get('/contact',   [ContactController::class, 'index'])->name('contact');
Route::get('/faq',       [PageController::class, 'faq'])->name('faq');
Route::get('/error404',  [PageController::class, 'error404'])->name('error404');

Route::get('/adminlogin', [AdminController::class, 'loginAdmin']);
Route::post('/adminlogin', [AdminController::class, 'postloginAdmin']);
Route::get('/admins', [DashboardController::class, 'index']);
Route::group(['prefix' => 'admins'], function () {

    Route::group(['prefix' => 'adcategory'], function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [AdminCategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [AdminCategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [AdminCategoryController::class, 'delete'])->name('category.delete');
    });

    Route::group(['prefix' => 'admenu'], function () {
        Route::get('/', [AdminMenuController::class, 'index'])->name('menu.index');
        Route::get('/create', [AdminMenuController::class, 'create'])->name('menu.create');
        Route::post('/store', [AdminMenuController::class, 'store'])->name('menu.store');
        Route::get('/edit/{id}', [AdminMenuController::class, 'edit'])->name('menu.edit');
        Route::post('/update/{id}', [AdminMenuController::class, 'update'])->name('menu.update');
        Route::get('/delete/{id}', [AdminMenuController::class, 'delete'])->name('menu.delete');
    });

    Route::group(['prefix' => 'adproduct'], function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('product.index');
        Route::get('/create', [AdminProductController::class, 'create'])->name('product.create');
        Route::post('/store', [AdminProductController::class, 'store'])->name('product.store');
        Route::get('/edit{id}', [AdminProductController::class, 'edit'])->name('product.edit');
        Route::post('/update{id}', [AdminProductController::class, 'update'])->name('product.update');
    });
});
