<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view ('Admin.Products.ProductsList', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.Products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'price' => 'required|integer',
            'category_id'=>'required',
            'image' => 'required|mimes:jpg,bmp,png|max:5048'
        ],
        [
            'category_id.required'=> 'Please choose a category!'
        ]);

        $newImageName = time() . '-' . $request->product_name . '.' . $request->image->extension();
        $request->image->move(public_path('productImages'),$newImageName);

            $product = Product::Create([
            'product_name' => $request->input('product_name'),
            'product_desc' => $request->input('product_desc'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'image_path' => $newImageName,

        ]);

        return redirect('/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('Admin.Products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'price' => 'required|integer',
            'category_id'=>'required',
        ],
    [
        'category_id.required'=> 'Please choose a category!'
    ]);

        $product = Product::WHERE('id', $id)
        ->update([
            'product_name' => $request->input('product_name'),
            'product_desc' => $request->input('product_desc'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id')
        ]);

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/products');
    }
}
