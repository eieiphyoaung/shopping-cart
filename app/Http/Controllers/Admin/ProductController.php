<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }
    
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index',compact('products'));
    }

    public function add()
    { 
        return view('admin.products.add');  
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
  
            $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
        }
        $product->image = '/storage/'.$path;
        $product->save();

        return redirect('/admin/products')->withSuccess('Added successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        
        return view('admin.products.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png',
        ]);

        $product = Product::find($id);
        $old_image = $product->image;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
  
            $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
            $product->image = '/storage/'.$path;
        }else{
            $product->image = $old_image;
        }
        
        
        $product->save();

        $products = Product::all();

        return redirect('/admin/products')->withSuccess('Updated successfully');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/products')->withSuccess('Deleted Successfully');
    }
}
