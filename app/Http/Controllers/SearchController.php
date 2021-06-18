<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        // return request(['search', 'category']);
        $products = Product::latest()->search(request(['search', 'category']))->get();
        $categories = Category::all();

        return view('Products.index', compact('products','categories'));
    }
}
