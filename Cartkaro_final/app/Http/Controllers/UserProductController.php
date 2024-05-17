<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserProductController extends Controller
{
    public function index()
    {
        $products = product::get();
        return view('Admin.Product.Product', ['products' => $products]);
    }
}
