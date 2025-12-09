<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index()
    {
        // Ambil pesanan user yang login
        $orders = Order::with('product')->where('user_id', auth()->id())->get();
        return view('orders', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('product')->findOrFail($id);
        return view('orders.show', compact('order'));
    }
}
