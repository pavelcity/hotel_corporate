<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photogallery;

class ProductController extends Controller
{



	#index 
	public function index()
	{
		$products = Product::get();
		return view('pages.product.index', compact('products'));
	}






	#detail 
	public function detail($id)
	{
		$product = Product::where('id', $id)->firstOrFail();
		// dd($product->slides);

		return view('pages.product.detail', compact('product'));
	}












	#
}
