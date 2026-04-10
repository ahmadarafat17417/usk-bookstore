<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

// Routes for Redirecting to Main Pages
Route::get('/', [MainController::class, 'welcome'])->name('main.welcome');
Route::get('/home', [MainController::class, 'index'])->name('main.index');
Route::get('/about', [MainController::class, 'about'])->name('main.about');

// Routes For Authentication
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::controller(AuthController::class)->group(function () {
    Route::get('/register','showRegister')->name('show.register');
    Route::get('/login','showLogin')->name('show.login');
    Route::post('/login','login')->name('auth.login');
    Route::post('/register','register')->name('auth.register');
    Route::post('/logout', 'logout')->name('auth.logout');
});


Route::prefix('dashboard')->controller(ProductController::class)->group(function() {
    Route::get('/index', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::post('/store', 'store')->name('products.store');
    Route::get('/{product}', 'edit')->name('products.edit');
    Route::put('/update/{product}', 'update')->name('products.update');
    Route::delete('/{product}', 'destroy')->name('products.destroy');
});

Route::resource('categories', CategoryController::class);

Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

Route::post('/orders/{order}/accept', [OrderController::class, 'accept'])->name('orders.accept');
Route::post('/orders/{order}/decline', [OrderController::class, 'decline'])->name('orders.decline');

Route::middleware(['auth'])->group(function () {

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');
    Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    Route::get('/order/receipt/{orderNumber}', [CartController::class, 'receipt'])->name('order.receipt');
    Route::get('/orders', [CartController::class, 'orders'])->name('orders.user');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

Route::middleware('auth')->group(function () {
    // Wishlist Routes
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
    Route::post('/wishlist/move-to-cart/{id}', [WishlistController::class, 'moveToCart'])->name('wishlist.move-to-cart');

    // TODO: ini harusnya admin
    Route::get('/contacts', [ContactController::class, 'adminIndex'])->name('admin.contacts.index');
    Route::post('/contacts/{contact}/reply', [ContactController::class, 'reply'])->name('admin.contacts.reply');
});


