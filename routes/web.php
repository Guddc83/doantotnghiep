<?php

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
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;

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

Route::group(['prefix' => 'admins'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::group(['prefix' => 'product'], function () {
        Route::get('/addproduct', [App\Http\Controllers\admin\ProductController::class, 'create'])->name('addproduct');
        Route::post('/postsever', [App\Http\Controllers\admin\ProductController::class, 'store'])->name('postsever');
    });
});
