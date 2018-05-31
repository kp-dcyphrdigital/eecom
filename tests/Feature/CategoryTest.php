<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{

	use RefreshDatabase;

    /** @test */
    public function can_get_a_list_of_categories()
    {
        $category = factory('App\Category')->create();
        $this->get('/categories')
        		->assertSee($category->name);
    }
}
