<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class OrderController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('Admin.Order.order', ['products' => $products]);
    }
}
