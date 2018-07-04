<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NavTest extends TestCase
{
	use RefreshDatabase;

    private $categoryAL1, $categoryAL2, $categoryAL3, $categoryBL1, $categoryBL2, $categoryBL3;

    public function setUp()
    {
        parent::setUp();
        $this->categoryAL1 = factory('App\Models\Category')->create([
            'name' => 'Second L1 Category',
            'depth' => 1,
            'sequence' => 2,
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
            'name' => 'First L1 Category',
            'depth' => 1,
            'sequence' => 1,
        ]);
        $this->categoryBL2 = factory('App\Models\Category')->create([
            'parent_id' => $this->categoryBL1->id,
            'depth' => 2,
        ]);
        $this->categoryBL3 = factory('App\Models\Category')->create([
            'parent_id' => $this->categoryBL2->id,
            'depth' => 3,
        ]);
    }

    /** @test */
    public function nav_categories_are_in_order_of_sequence()
    {
        $response = $this->get('/');
        $this->assertTrue( $response->data('navtree')->pluck('name')[0] === "First L1 Category" );
        $this->assertTrue( $response->data('navtree')->pluck('name')[1] === "Second L1 Category" );
    }

}
