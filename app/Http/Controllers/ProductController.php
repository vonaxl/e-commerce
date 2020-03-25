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
	}

	public function destroy(Product $product){
		$product -> images() -> delete();   
		$product -> reviews() -> delete();
		$product -> categories() -> detach();
		$product -> delete();
	}

	public function searchProducts($value){
		$products = Product::where( 'name', 'LIKE', "%$value%" ) -> get();
		return response() -> json(compact('products'));
	}
}
