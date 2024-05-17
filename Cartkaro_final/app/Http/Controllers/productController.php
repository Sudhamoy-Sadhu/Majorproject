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
            'name' => 'required',
            'Description' => 'required',
            'Price' => 'required',
            'categories' => 'required',
            'proImage' => 'required',
        ]);

        // dd($request->all());
        //Upload imager
        $proImage = time() . '.' . $request->proImage->extension();
        $request->proImage->move(public_path('product_img'), $proImage);

        $products = new product;
        $products->name = $request->name;
        $products->Description = $request->Description;
        $products->Price = $request->Price;
        $products->categories = $request->categories;
        $products->proImage = $proImage;

        $products->save();

        return redirect('products');
    }

    public function update(Request $request,$id){
        $products = product::where('id', $id)->first();
        $products->name = $request->name;
        $products->Description = $request->Description;
        $products->Price = $request->Price;
        $products->categories = $request->categories;

        $products->save();
        return back();
    }
    public function edit($id)
    {
        $products = product::where('id', $id)->first();
        return view('Admin.Product.productedit', ['products' => $products]);
    }
}
