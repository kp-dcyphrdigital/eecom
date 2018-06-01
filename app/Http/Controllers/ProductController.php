<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index(Product $products)
	{
		$products = $products->get();
		return view( 'customer.index', compact('products') );
	}

	public function list(Category $category, Product $products)
	{
		$products = $category->products()->get();
		if ($category->depth < 2) {
			return view( 'customer.categorytop', compact('products') );
		} else {
			return view( 'customer.categorylower', compact('products') );
		}
	}

	public function show(Category $category, Product $product)
	{
		return view( 'customer.pdp', compact('product') );		
	}

	public function search(Request $request, Product $products)
	{
		$products = $products->byCategory( $request->categories )->get();
		return view( 'customer.index', compact('products') );
	}

}
