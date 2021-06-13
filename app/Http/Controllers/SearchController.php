<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        // return request(['search', 'category']);
        $products = Product::latest()->search(request(['search', 'category']))->get();

        return view('Products.index', ['products'=> $products]);
    }
}
