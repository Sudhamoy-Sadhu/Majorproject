<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index()
    {
        $products = product::get();
        return view('Admin.Product.Product', ['products' => $products]);
    }
    public function create()
    {
        return view('Admin.Product.productadd');
    }
    public function delete($id)
    {
        $products = product::where('id', $id)->first();
        // dd($products);
        $products->delete();
        return back();
    }
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'Price' => 'required',
        ]);

        $products = new product;
        $products->name = $request->Name;
        $products->Description = $request->Description;
        $products->Price = $request->Price;
        $products->Total_Qty = $request->Total_Qty;

        $products->save();

        return redirect()->route("products.index");
    }

    public function update(Request $request,$id){
        $products = product::where('id', $id)->first();
        $products->name = $request->Name;
        $products->Description = $request->Description;
        $products->Price = $request->Price;
        $products->Total_Qty = $request->Total_Qty;

        $products->save();
        return redirect("products");
    }
    public function edit($id)
    {
        $products = product::where('id', $id)->first();
        return view('Admin.Product.productedit', ['products' => $products]);
    }
}
