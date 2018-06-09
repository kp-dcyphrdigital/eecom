<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function index(Request $request)
	{
		// $products = $products->byCategory( $request->categories )->get();
		$products = Category::whereIn( 'id', explode(',', $request->categories) )
						->with('products')
						->get();
		// return $products;
		return view( 'customer.index', compact('products') );
	}
}
