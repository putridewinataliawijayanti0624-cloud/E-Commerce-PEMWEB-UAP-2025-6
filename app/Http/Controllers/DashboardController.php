<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // bisa ganti 'dashboard' dengan nama file blade yang sesuai
        return view('dashboard');
    }
}