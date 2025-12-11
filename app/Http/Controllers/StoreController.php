<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::withCount('products')->get(); 

        $products = Product::with(['productImages', 'productCategory'])
            ->latest()
            ->take(12)
            ->get();

        // title untuk halaman store list
        $title = "All Stores";

        return view('store.index', compact('title','stores', 'products'));
    }


    public function show($id)
    {
        $store = Store::findOrFail($id);

        $products = Product::where('store_id', $id)
            ->with(['productImages', 'productCategory'])
            ->get();

        // title jadi nama toko
        $title = $store->name;

        return view('store.show', compact('title','store','products'));
    }
}
