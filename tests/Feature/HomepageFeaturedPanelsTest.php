<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomepageFeaturedPanelsTest extends TestCase
{
	use RefreshDatabase;

    private $categoryAL1, $categoryAL2, $categoryAL3, $categoryBL1, $categoryBL2, $categoryBL3;
    private $product1, $product2, $product3;

    public function setUp()
    {
        parent::setUp();
        $this->categoryAL1 = factory('App\Models\Category')->create([
            'depth' => 1,
        ]);
        $this->categoryAL2 = factory('App\Models\Category')->create([
            'parent_id' => $this->categoryAL1->id,
            'depth' => 2,
        ]);
        $this->categoryAL3 = factory('App\Models\Category')->create([
            'id' => 3,
            'parent_id' => $this->categoryAL2->id,
            'depth' => 3,
        ]);
        $this->categoryBL1 = factory('App\Models\Category')->create([
            'depth' => 1,
        ]);
        $this->categoryBL2 = factory('App\Models\Category')->create([
            'parent_id' => $this->categoryBL1->id,
            'depth' => 2,
        ]);
        $this->categoryBL3 = factory('App\Models\Category')->create([
            'parent_id' => $this->categoryBL2->id,
            'depth' => 3,
        ]);
        $this->product1 = factory('App\Models\Product')->create([
            'name' => 'Random Test Product 1',
            'style' => 'STYLE123',
            'colour' => 'RED',
            'description' => 'Random Test Product 1',
            'slug' => 'random-test-product-1',
            'hero' => 1,
            'featured' => 1,
        ]);
        $this->product2 = factory('App\Models\Product')->create([
            'name' => 'Random Test Product 2',
            'style' => 'STYLE123',
            'colour' => 'BLACK',
            'description' => 'Random Test Product 2',
            'slug' => 'random-test-product-2',
        ]);
        $this->product3 = factory('App\Models\Product')->create([
            'name' => 'Random Test Product 3',
            'style' => 'STYLE456',
            'description' => 'Random Test Product 3',
            'slug' => 'random-test-product-3',
            'hero' => 1,
            'featured' => 1,
        ]);
        $this->categoryAL3->products()->attach($this->product1);
        $this->categoryAL3->products()->attach($this->product2);
        $this->categoryBL3->products()->attach($this->product2);
        $this->categoryBL3->products()->attach($this->product3);

        factory('App\Models\Variant')->create([
            'product_id' => $this->product1->id,
            'style' => $this->product1->style,
            'sku' => 'SKU1',
            'barcode' => 'barcode1',
            'price' => 100,
            'rrp' => 90,
            'stock' => 10,
            'attribute1' => $this->product1->colour,
            'attribute2' => '9',
        ]);

        factory('App\Models\Variant')->create([
            'product_id' => $this->product2->id,
            'style' => $this->product2->style,
            'sku' => 'SKU2',
            'barcode' => 'barcode2',
            'price' => 101,
            'rrp' => 91,
            'stock' => 1,
            'attribute1' => $this->product2->colour,
            'attribute2' => '9',
        ]);

        factory('App\Models\Variant')->create([
            'product_id' => $this->product2->id,
            'style' => $this->product2->style,
            'sku' => 'SKU3',
            'barcode' => 'barcode3',
            'price' => 102,
            'rrp' => 92,
            'stock' => 9,
            'attribute1' => $this->product2->colour,
            'attribute2' => '10',
        ]);

        factory('App\Models\Variant')->create([
            'product_id' => $this->product3->id,
            'style' => $this->product3->style,
            'sku' => 'SKU4',
            'barcode' => 'barcode4',
            'price' => 20,
            'rrp' => 20,
            'stock' => 1,
        ]);
    }

    /** @test */
    public function home_page_is_working()
    {
        $this->get('/')
                ->assertSuccessful();
    }

    /** @test */
    public function home_page_is_showing_featured_products_in_chosen_categories()
    {
        $response = $this->get('/');
        $this->assertCount( 1, $response->data('products')->toArray()[0]['products'] );
        $this->assertCount( 3, $response->data('products')->toArray()[0]['products'][0]['variants'] );
        $this->assertContains(
            $this->product1->name,
            $response->data('products')->pluck('products')->toArray()[0][0]
        );
    }

    /** @test */
    public function home_page_is_not_showing_non_featured_products_in_chosen_categories()
    {
        $response = $this->get('/');

        $p[] = $response->data('products')->map(function($category) {
            return $category->products->pluck('name');
        });

        $this->assertNotContains(
            $this->product2->name,
            $p[0]->first()->toArray()
        );
    }

    /** @test */
    public function home_page_is_not_showing_featured_products_in_non_chosen_categories()
    {
        $response = $this->get('/');
        $this->assertNotContains(
            $this->product3->name,
            $response->data('products')->first()->products->pluck('name')
        );
    }

}
