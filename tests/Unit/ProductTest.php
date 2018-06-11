<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
	use RefreshDatabase;
    
    /** @test */
    public function products_should_be_filterable_by_category()
    {
        $exitCode = \Artisan::call('db:seed');
        $categories = '2,7';
        $products = (new Product)->byCategory($categories)
                        ->get()
                        ->toJson();
        $this->assertContains('Baur Supreme 1S Ice Hockey Skate', $products);
        $this->assertContains('Bauer Nexus 1N Griptac Hockey Stick 17', $products);
        $this->assertNotContains('Bauer S17 Supreme S170 Glove New', $products);
    }
}
