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
			$subCategories = $category->children()->get();	
			return view( 'customer.categorytop', compact('category', 'subCategories') );
		} else {
			$categories = $category->descendants()->pluck('id');
			$categories[] = $category->getKey();
			$products = $category->whereIn('id', $categories)
									->with('products.variants')
									->get()
									->map( function($category) {
										return $category->products;
									})->flatten()
									->unique('id');
			return view( 'customer.categorylower', compact('category', 'products') );
		}
	}

	public function show($productslug, $colour = null)
	{
		$style = Product::where('slug', 'LIKE', "%$productslug%")->pluck('style')->first();
		if ( ! $style ) {
			abort(404);
		}
		$product = Product::where('slug', 'LIKE', "%$productslug")->first();
		if ($colour) {
			$productslug = $productslug . "/" . $colour;
			$product = Product::where('slug', 'LIKE', "%$productslug")->first();
		} else {
			$product = Product::where('hero', 1)
						->where('slug', 'LIKE', "%$productslug%")
						->first();
		}

		$variants = $product->variants;
		for ($i=1; $variants->pluck('attribute' . $i)->unique()->values()->first() != null ; $i++) {
			$attributeSet[] = $variants->pluck('attribute' . $i)->unique()->values();
		}
		$product->price = $variants->max('price');
		$product->rrp = $variants->max('rrp');
		$product->stock = $variants->max('stock');

		return view( 'customer.pdp', compact('product', 'variants', 'attributeSet') );		
	}

}
