<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
//    public function index()
//    {
//        return view('products.index',[
//            'products'=>Product::latest()->all()    //All use korle kaj kore na latest() but get() dile kaj kore
//        ]);
//    }
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->paginate(7)
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
    public function productEdit($ID)
    {
        $Product = Product::where('id', $ID)->first();
        return view('products.edit' ,['product'=>$Product]);
    }
    public function productUpdate(Request $request, $id)
    {
        //validation
        $request ->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000'
        ]);

        $product = Product::where('id',$id)->first();


        if (isset($request->img))
        {
            //upload image
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('products'), $imageName);
            $product->image = $imageName;

        }

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return redirect('/')-> withSuccess('Product Updated Successfully !!!!!!!!!!!!');
    }
    public function productRemove($id)
    {
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Delete Successfully!!!!!!!!!');
    }

    public function singleProduct($id)
    {
        $product = Product::where('id',$id)->first();
        return view('products/singleProduct' , ['product' => $product]);
    }
}
