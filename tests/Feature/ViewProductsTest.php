<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewProductsTests extends TestCase
{
	use RefreshDatabase;

    private $category1, $category2, $category3;
    private $product1, $product2, $product3;

    public function setUp()
    {
        parent::setUp();
        $this->category1 = factory('App\Category')->create();
        $this->category2 = factory('App\Category')->create();
        $this->category3 = factory('App\Category')->create();
        $this->product1 = factory('App\Product')->create([
            'name' => 'randomtestproduct1'
        ]);
        $this->product2 = factory('App\Product')->create([
            'name' => 'randomtestproduct2'
        ]);
        $this->product3 = factory('App\Product')->create([
            'name' => 'randomtestproduct3'
        ]);
        $this->category1->products()->attach($this->product1);
        $this->category1->products()->attach($this->product2);
        $this->category2->products()->attach($this->product2);
        $this->category3->products()->attach($this->product3);
    }

    /** @test */
    public function home_page_is_showing_products()
    {
        $this->get('/')->assertSee($this->product1->name);
    }

    /** @test */
    public function product_page_is_showing_a_single_product()
    {
        $this->get('/' . $this->category1->name . '/' . $this->product1->name)
                    ->assertSee($this->product1->name)
                    ->assertDontSee($this->product2->name)
                    ->assertDontSee($this->product3->name);
        $this->get('/' . $this->category2->name . '/' . $this->product2->name)
                    ->assertSee($this->product2->name)
                    ->assertDontSee($this->product1->name)
                    ->assertDontSee($this->product3->name);
        $this->withExceptionHandling();
        $this->get('/' . $this->category3->name . '/' . $this->product2->name)
                    ->assertDontSee($this->product1->name)
                    ->assertDontSee($this->product2->name)
                    ->assertDontSee($this->product3->name);
    }

    /** @test */
    public function category_pages_show_only_products_in_the_category()
    {
        $this->get('/' . $this->category1->name)
        			->assertSee('randomtestproduct1')
        			->assertSee('randomtestproduct2')
        			->assertDontSee('randomtestproduct3');

        $this->get('/' . $this->category2->name)
        			->assertSee('randomtestproduct2')
        			->assertDontSee('randomtestproduct1')
        			->assertDontSee('randomtestproduct3');
    }

    /** @test */
    public function products_can_be_viewed_with_category_filter()
    {
        $searchCategories = $this->category1->id . ',' . $this->category2->id;
        $this->get("/search?categories=$searchCategories")
                    ->assertSee('randomtestproduct1')
                    ->assertSee('randomtestproduct2')
                    ->assertDontSee('randomtestproduct3');
    }

}
