<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // get all records from products table
        // save to a variable call $products
        $products = Product::all();

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('products');
    }

    public function view(Product $product)
    {
        return view('products.view',['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());

        return redirect()->back();
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }
}
