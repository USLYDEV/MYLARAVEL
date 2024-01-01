<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    
        public function index (){
            //this connect to model to fect list of all product in DB
            $products = Product::all();
            //Main view
            return view('products.index', ['products' => $products]);
        }

        public function create (){
            return view('products.create');
        }

        public function store (Request $request){
            //this dump data  
            // dd($request);

            //Validate data before submission
            $data = $request->validate([
                'name' => 'required',
                'qty' => 'required',
                'price' => 'required',
                'description' => 'nullable',
            ]);

            $newProduct = Product::create($data);

            return redirect(route('product.index'));
        }

        public function edit(Product $product){
            // dd($product);
            return view('products.edit', ['product' => $product]);
        }

        public function update(Product $product, Request $request){

              //Validate data before submission
              $data = $request->validate([
                'name' => 'required',
                'qty' => 'required',
                'price' => 'required',
                'description' => 'nullable',
            ]);

            $product ->update($data);

            return redirect(route('product.index'))->with('success', 'Product Updated Successfully');;
        }
}
