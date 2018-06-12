<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

	public function index(Category $category, Product $product)
	{
		if ($category->depth < 2) {
			$subCategories = $category->descendants()->get();	
			return view( 'customer.categorytop', compact('category', 'subCategories') );
		} else {
			$categories = $category->descendants()->pluck('id');
			$categories[] = $category->getKey();
			$products = $category->whereIn('id', $categories)
									->with('products')
									->get()
									->map( function($category) {
										return $category->products;
									})->flatten()
									->unique('id');
			return view( 'customer.categorylower', compact('category', 'products') );
		}
	}

	public function show(Category $category, Product $product)
	{
		return view( 'customer.pdp', compact('product') );		
	}

}
