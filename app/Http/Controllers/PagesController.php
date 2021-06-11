<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PagesController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('index', compact('products'));
    }

    public function admin(){
        return view('Admin.index');
    }
}
