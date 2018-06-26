<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
		$categories = DB::table('AddlonData')->select(DB::raw('DISTINCT STOCK_CATEGORY, SUB_CATEGORY_NAME, `SUB CATEGORY 2`'))->get();
		$categories->unique('STOCK_CATEGORY')->pluck('STOCK_CATEGORY')->each(function($l1item) use ($categories) {
			$l1item = trim($l1item);
			$sequence = $this->getSequence($l1item);
			$l1 = factory('App\Models\Category')->create([
		        'name' => $l1item,
		        'slug' => str_slug($l1item, '-'),
		        'depth' => 1,
		        'image' => 'products/skate1.jpg',
		        'sequence' => $sequence,
			]);
			$l1id = $l1->id;
			$l1slug = $l1->slug;
			$categories->where('STOCK_CATEGORY', $l1item)->unique('SUB_CATEGORY_NAME')->pluck('SUB_CATEGORY_NAME')->each(function($l2item) use ($categories, $l1item, $l1id, $l1slug) {
				$l2id = factory('App\Models\Category')->create([
			        'parent_id' => $l1id,
			        'name' => trim($l2item),
			        'slug' => $l2slug = $l1slug . '-' . str_slug($l2item, '-'),
			        'depth' => 2,
			        'image' => 'products/skate1.jpg',
				])->id;
				$categories->where('STOCK_CATEGORY', $l1item)->where('SUB_CATEGORY_NAME', $l2item)->pluck('SUB CATEGORY 2')->each(function($l3item) use ($l1item, $l2item, $l2id, $l2slug) {
					$l3id = factory('App\Models\Category')->create([
				        'parent_id' => $l2id,
				        'name' => trim($l3item),
				        'slug' => rtrim($l2slug . '-' . str_slug($l3item, '-'), "/"),
				        'depth' => 3,
				        'image' => 'products/skate1.jpg',
					])->id;
					$products = DB::table('AddlonData')->where('STOCK_CATEGORY', $l1item)
									->where('SUB_CATEGORY_NAME', $l2item)
									->where('SUB CATEGORY 2', $l3item)
									->orderBy('STYLE')
									->get();
					$uniquestylecolour = $products->unique(function($item) {
						return $item->STYLE . $item->COLOUR;
					});
					$uniquestylecolour->each(function($product) use ($l3id, $products) {
						$createdproduct = factory('App\Models\Product')->create([
						    'style' => $product->STYLE,
						    'colour' => $product->COLOUR,
						    'name' => $product->STOCK_ALPHA,
						    'description' => 'Product Description Here',
						    'image' => 'products/skate1.jpg',
						    'rating' => 4,
						    'featured' => 1,
						    'slug' => rtrim(str_slug($product->STOCK_ALPHA . $product->STYLE, '-') . "/" . str_slug($product->COLOUR, '-'), "/"),
						    'brand' => $product->BRAND,
						]);
						$createdproduct->categories()->attach([$l3id]);
						$createdproductid = $createdproduct->id;
						$products->where('STYLE', $product->STYLE)->where('COLOUR', $product->COLOUR)->each(function($variant) use ($createdproductid) {
							factory('App\Models\Variant')->create([
								'product_id' => $createdproductid,
								'sku' => $variant->STOCK_CODE,
						    	'barcode' => $variant->BAR_STOCK_CODE,
								'attribute1' => trim($variant->SIZE) == '' ? 0 : trim($variant->SIZE), 
								'attribute2' => trim($variant->WIDTH) == '' ? 0 : trim($variant->WIDTH),
								'attribute3' => trim($variant->HAND) == '' ? 0 : trim($variant->HAND), 
								'attribute4' => trim($variant->FLEX) == '' ? 0 : trim($variant->FLEX), 
								'attribute5' => trim($variant->PATTERN) == '' ? 0 : trim($variant->PATTERN),
								'price' => (int)ltrim( str_replace(",", "", $variant->PRICE), "$" ),
								'rrp' => (int)ltrim( str_replace(",", "", $variant->RRP), "$" ),
								'stock' => $variant->ON_HAND_QTY * 1 < 1 ? 0 : $variant->ON_HAND_QTY,
							]);
						});
					});
				});
			});
		});
    }
    public function getSequence($item)
    {

    	if ($item == 'Hockey Skates') {
    		return 0;
    	} else if ($item == 'Hockey Sticks') {
    		return 3;
    	} else if ($item == 'Figure Skating') { 
    		return 6;
    	} else if ($item == 'Goalie') { 
    		return 9;
    	} else if ($item == 'Protective') { 
    		return 12;
    	} else if ($item == 'Jerseys & Apparel') { 
    		return 15;
    	} else if ($item == 'Bags') { 
    		return 18;
    	} else {
    		return 21;
    	}
    }
}
