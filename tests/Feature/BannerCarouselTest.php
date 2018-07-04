<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BannerCarouselTest extends TestCase
{
	use RefreshDatabase;

    private $banners;

    public function setUp()
    {
        parent::setUp();
        $this->banners = factory('App\Models\Banner', 3)->create();
    }

    /** @test */
    public function correct_number_of_banners_are_being_set_to_view()
    {
        $response = $this->get('/');
        $this->assertCount( $this->banners->count(), $response->data('banners') );
    }

}
