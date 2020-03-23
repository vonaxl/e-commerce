<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Admin;
class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return $products;
    }

    public function show(Product $product){
        return $product;
        // return view('test', compact('product'));
    }

    public function destroy(Product $product){

        $product -> images() -> delete();   
        $product -> reviews() -> delete();
        $product -> categories() -> detach();

        $product -> delete();

    }
}
