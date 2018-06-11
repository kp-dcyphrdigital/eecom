<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
	public function index()
	{
		$products = Cache::remember('products', 60, function() { 
        	// [2,4,6] below denotes homepage featured product categories 
			// which presumably will come from the DB eventually
            return Category::whereIn('id', [2,7,9])->with(['products'=> function($query) {
            	$query->where('featured', 1);
            }])->get();
        });
		return view( 'customer.index', compact('products') );
	}
}
