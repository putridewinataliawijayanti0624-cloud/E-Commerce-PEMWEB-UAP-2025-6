<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;              
use Illuminate\Support\Facades\Auth; 

class CheckoutController extends Controller
{
    public function index()
    {
        // Ambil semua pesanan user yang sedang login
        $orders = Order::where('user_id', Auth::id())->get();

        return view('checkout.index', compact('orders'));
    }
}

