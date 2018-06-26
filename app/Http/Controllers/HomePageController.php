<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomePageController extends Controller
{
	public function index()
	{
		$products = Cache::remember('products', 60, function() { 
        	// [2,4,6] below denotes homepage featured product categories 
			// which presumably will come from the DB eventually
            return Category::whereIn('id', [3,86,121])->with(['products'=> function($query) {
            	$query->where('featured', 1);
            }])->get();
        });
        $products = $products->map(function ($product, $key) {
    		if ($product->id == 3) {
    			$product->name = 'Featured Skates';
    		} else if ($product->id == 86) {
    			$product->name = 'Featured Sticks';
    		} else if ($product->id == 121) {
    			$product->name = 'Featured Gloves';
    		}
    		return $product;
		});
		return view( 'customer.index', compact('products') );
	}
}
