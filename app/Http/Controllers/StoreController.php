<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // pastikan model Product ada

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::with(['productImages','productCategory','store'])->get();
        return view('store', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product-detail', compact('product'));
    }
}