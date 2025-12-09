<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = ProductCategory::with('products.productImages', 'products.store')->findOrFail($id);
        return view('category', compact('category'));
    }
}