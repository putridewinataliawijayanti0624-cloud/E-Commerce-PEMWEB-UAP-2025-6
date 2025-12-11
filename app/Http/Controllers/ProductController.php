<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Ambil produk beserta gambar dan kategorinya
        $product = Product::with(['productImages', 'productCategory'])->findOrFail($id);

        return view('products.show', compact('product'));
    }
}

