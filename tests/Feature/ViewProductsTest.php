<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewProductsTests extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function home_page_is_showing_products()
    {
        $product = factory('App\Product')->create();
        $this->get('/')->assertSee($product->name);
    }

    /** @test */
    public function product_page_is_showing_a_single_product()
    {
        $category1 = factory('App\Category')->create();
        $category2 = factory('App\Category')->create();
        $category3 = factory('App\Category')->create();

        $product = factory('App\Product')->create([
            'name' => 'testproduct'
        ]);
        $category1->products()->attach($product);
        $category2->products()->attach($product);

        $this->get('/' . $category1->name . '/' . $product->name)->assertSee($product->name);
        $this->get('/' . $category2->name . '/' . $product->name)->assertSee($product->name);
        $this->withExceptionHandling();
        $this->get('/' . $category3->name . '/' . $product->name)->assertDontSee($product->name);
    }

    /** @test */
    public function category_pages_show_only_products_in_the_category()
    {
        $category1 = factory('App\Category')->create();
        $category2 = factory('App\Category')->create();

        $product1 = factory('App\Product')->create([
        	'name' => 'product1',
        ]);
        $category1->products()->attach($product1);
        $category2->products()->attach($product1);

        $product2 = factory('App\Product')->create([
        	'name' => 'product2',
        ]);
        $category1->products()->attach($product2);

        $product3 = factory('App\Product')->create([
        	'name' => 'product3',
        ]);

        $this->get('/' . $category1->name)
        			->assertSee('product1')
        			->assertSee('product2')
        			->assertDontSee('product3');

        $this->get('/' . $category2->name)
        			->assertSee('product1')
        			->assertDontSee('product2')
        			->assertDontSee('product3');

    }

}
