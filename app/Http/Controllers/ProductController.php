<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Admin;
class ProductController extends Controller
{
	public function index(){
		return Product::all();;
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
		$products = Product::where( 'name', 'LIKE', "%$value%" ) -> with('categories', 'reviews') ->get();
		return response() -> json(compact('products'));
	}

	public function allCategories(){
		return Category::all();
	}
}
