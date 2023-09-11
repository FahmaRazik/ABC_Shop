<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
       

    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required|numeric'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));



    }

    public function edit(Product $product){
      return view('products.edit',['product' => $product]);

    }

    public function update(Product $product,Request $request){
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required|numeric'
        ]);

        $product->update($data);

        return redirect(route('products.index'))->with('success','Product Updated Succesfully!!');

    }


    

    public function destroy(Product $product){

        $product->delete();
        return redirect(route('products.index'))->with('success','Product deleted Succesfully!!')


    }
}



