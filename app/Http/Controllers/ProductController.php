<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
	public function index()
	{
		$products = Cache::remember('products', 60, function() { 
        	// [2,4,6] below denotes homepage featured product categories 
			// which presumably will come from the DB eventually
            return Category::whereIn('id', [2,4,6])->with(['products'=> function($query) {
            	$query->where('featured', 1);
            }])->get();
        });
        // return $products;
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

	public function search(Request $request)
	{
		// $products = $products->byCategory( $request->categories )->get();
		$products = Category::whereIn( 'id', explode(',', $request->categories) )
						->with('products')
						->get();
		// return $products;
		return view( 'customer.index', compact('products') );
	}

}
