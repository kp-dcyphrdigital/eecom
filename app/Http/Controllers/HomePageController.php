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
                $query->where('featured', 1)->where('hero', 1)->with('variants');
            }])->get();
        });

        $products = $products->map(function ($category) {
    		if ($category->id == 3) {
    			$category->name = 'Featured Skates';
    		} else if ($category->id == 86) {
    			$category->name = 'Featured Gloves';
    		} else if ($category->id == 121) {
    			$category->name = 'Featured Sticks';
    		}
    		return $category;
		});
		return view( 'customer.index', compact('products') );
	}
}
