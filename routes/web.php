<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Vendor\VproductController;
use App\Http\Controllers\Vendor\VdashboardController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

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
//  Routes which use get function 
Route::get('/', [PagesController::class, 'index'])->name('home.index');
Route::get('/categories/{category}/productlist', function(Category $category) {
    $products = $category->products;
    return view('Products.list', compact('products'));
})->name('product_list');
Route::get('search', [SearchController::class, 'search'])->name('search');


//End routes which use get function 

//  Routes which use resources
Route::resource('categories', CategoriesController::class);
Route::resource('products', ProductsController::class);

//  Dashboard are protected under authentication.
Route::name('admin.')->prefix('admin')->middleware(['auth','isAdmin', 'PreventBackHistory'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);   
});

Route::prefix('vendor')->name('vendor.')->middleware(['auth','isVendor','PreventBackHistory'])->group(function(){
    Route::resource('products', VproductController::class);
    Route::resource('dashboard', VdashboardController::class);
});

// we might not use this function as customer and guest only have slight difference.
Route::middleware(['auth','isCustomer','PreventBackHistory'])->group(function(){
    Route::resource('order', OrderController::class);
    Route::resource('cart', OrderItemController::class);
    Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout');
});




//  End routes which use resources


//  Route for authentication
Auth::routes();
