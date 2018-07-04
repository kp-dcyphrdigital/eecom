<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PDPTest extends TestCase
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
            'parent_id' => $this->categoryAL2->id,
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

        $this->categoryAL3->products()->attach($this->product1);

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
    }

    /** @test */
    public function product_page_is_showing_a_single_product()
    {
        $this->get('/p/' . $this->product1->slug)
                    ->assertSee($this->product1->name);
        $this->withExceptionHandling();
        $this->get('/p/some-nonexistent-products')
                    ->assertNotFound();
    }

}
