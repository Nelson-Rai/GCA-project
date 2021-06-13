<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
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
Route::get('/', [PagesController::class, 'index']);
Route::get('/categories/{category}/productlist', function(Category $category) {
    $products = $category->products;
    return view('Products.list', compact('products'));
})->name('product_list');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('ca', [CartController::class, 'index'])->name('cart');

//End routes which use get function 

//  Routes which use resources
Route::resource('categories', CategoriesController::class);
Route::resource('products', ProductsController::class);

//  Dashboard are protected under authentication.
Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/products', ProductController::class, array("as"=>"admin"));
    Route::resource('/admin/dashboard', DashboardController::class, array("as"=>"admin"));
    Route::resource('/admin/categories', CategoryController::class, array("as"=>"admin"));   
});

Route::resource('order', OrderController::class);
Route::resource('orderitem', OrderItemController::class);

//  End routes which use resources
Route::post('cart', [OrderItemController::class, 'store'])->name('add_to_cart');


//  Route for authentication
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

