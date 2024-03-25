<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index',[
            'products'=>Product::get()
        ]);
    }
    public function productCreate()
    {
        return view('products.create');
    }
    public function productStore(Request $request)
    {
        //validation
        $request ->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'required|mimes:jpeg,jpg,png,gif|max:1000'
        ]);


        //upload image
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('products'), $imageName);


        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()-> withSuccess('Product Create Successfully !!!!!!!!!!!!');


    }
}
