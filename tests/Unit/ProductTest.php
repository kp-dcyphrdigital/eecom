<?php

namespace Tests\Unit;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
	use RefreshDatabase;
    
    /** @test */
    public function products_should_be_filterable_by_category()
    {
        $category1 = factory('App\Category')->create();
        $category2 = factory('App\Category')->create();

        $product1 = factory('App\Product')->create([
        	'name' => 'product1',
        ]);
        $category1->products()->attach($product1);

        $product2 = factory('App\Product')->create([
        	'name' => 'product2',
        ]);
        $category2->products()->attach($product2);

        $product3 = factory('App\Product')->create([
        	'name' => 'product3',
        ]);

        $categories = $category1->id . ',' . $category2->id;
        $products = (new Product)->byCategory($categories)
                        ->get()
                        ->toJson();

        $this->assertContains('product1', $products);
        $this->assertContains('product2', $products);
        $this->assertNotContains('product3', $products);
    }
}
