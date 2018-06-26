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
			$l1id = factory('App\Models\Category')->create([
		        'name' => $l1item,
		        'slug' => str_slug($l1item, '-'),
		        'depth' => 1,
		        'image' => 'products/skate1.jpg',
		        'sequence' => $sequence,
			])->id;
			$categories->where('STOCK_CATEGORY', $l1item)->unique('SUB_CATEGORY_NAME')->pluck('SUB_CATEGORY_NAME')->each(function($l2item) use ($categories, $l1item, $l1id) {
				$l2id = factory('App\Models\Category')->create([
			        'parent_id' => $l1id,
			        'name' => trim($l2item),
			        'slug' => $l1id . str_slug($l2item, '-'),
			        'depth' => 2,
			        'image' => 'products/skate1.jpg',
				])->id;
				$categories->where('STOCK_CATEGORY', $l1item)->where('SUB_CATEGORY_NAME', $l2item)->pluck('SUB CATEGORY 2')->each(function($l3item) use ($l1item, $l2item, $l2id) {
					$l3id = factory('App\Models\Category')->create([
				        'parent_id' => $l2id,
				        'name' => trim($l3item),
				        'slug' => $l2id . str_slug($l3item, '-'),
				        'depth' => 3,
				        'image' => 'products/skate1.jpg',
					])->id;
					$products = DB::table('AddlonData')->where('STOCK_CATEGORY', $l1item)
									->where('SUB_CATEGORY_NAME', $l2item)
									->where('SUB CATEGORY 2', $l3item)
									->orderBy('STYLE')
									->get();
					$products->unique('STYLE')->each(function($product) use ($l3id, $products) {
						$createdproduct = factory('App\Models\Product')->create([
						    'style' => $product->STYLE,
						    'name' => $product->STOCK_ALPHA,
						    'description' => 'Product Description Here',
						    'image' => 'products/skate1.jpg',
						    'rating' => 4,
						    'featured' => 1,
						    'slug' => str_slug($product->STYLE, '-'),
						    'brand' => $product->BRAND,
						    'barcode' => $product->BAR_STOCK_CODE,
						]);
						$createdproduct->categories()->attach([$l3id]);
						$createdproductid = $createdproduct->id;
						$products->where('STYLE', $product->STYLE)->each(function($variant) use ($createdproductid) {
							factory('App\Models\Variant')->create([
								'product_id' => $createdproductid,
								'sku' => $variant->STOCK_CODE,
								'attribute1' => trim($variant->COLOUR) == '' ? 0 : trim($variant->COLOUR),
								'attribute2' => trim($variant->SIZE) == '' ? 0 : trim($variant->SIZE), 
								'attribute3' => trim($variant->WIDTH) == '' ? 0 : trim($variant->WIDTH),
								'attribute4' => trim($variant->HAND) == '' ? 0 : trim($variant->HAND), 
								'attribute5' => trim($variant->FLEX) == '' ? 0 : trim($variant->FLEX), 
								'attribute6' => trim($variant->PATTERN) == '' ? 0 : trim($variant->PATTERN),
								'price' => (int)ltrim( str_replace(",", "", $variant->PRICE), "$" ) * 100,
								'rrp' => (int)ltrim( str_replace(",", "", $variant->RRP), "$" ) * 100,
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
