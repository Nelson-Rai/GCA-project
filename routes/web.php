<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Category;
use App\Models\Product;

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

Route::get('/', [PagesController::class, 'index']);
// Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/categories/{category}/productlist', function(Category $category) {
    $products = $category->products;
    return view('Products.list', compact('products'));
})->name('product_list');

Route::resource('categories', CategoriesController::class);
Route::resource('products', ProductsController::class);
Route::resource('/admin/products', ProductController::class);
Route::resource('/admin/dashboard', DashboardController::class);