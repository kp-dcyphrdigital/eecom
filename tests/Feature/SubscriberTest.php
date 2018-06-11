<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubscriberTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_subscribers_email_is_saved_to_the_DB()
    {
    	$subscriber = factory('App\Models\Subscriber')->make()->toArray();
    	$this->post('/subscribers/new', $subscriber);
    	$this->assertDatabaseHas('subscribers', $subscriber);
    }

    /** @test */
    public function an_invalid_email_generates_a_validation_error()
    {
    	$subscriber = factory('App\Models\Subscriber')->make(['email' => 'test@'])->toArray();
    	$this->withExceptionHandling()
    			->post('/subscribers/new', $subscriber)->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_blank_email_generates_a_validation_error()
    {
    	$subscriber = factory('App\Models\Subscriber')->make(['email' => ''])->toArray();
    	$this->withExceptionHandling()
    			->post('/subscribers/new', $subscriber)->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_duplicate_email_generates_an_error()
    {
    	$subscriber = factory('App\Models\Subscriber')->make()->toArray();

    	$this->post('/subscribers/new', $subscriber);
    	$this->assertDatabaseHas('subscribers', $subscriber);

    	$this->withExceptionHandling()
    			->post('/subscribers/new', $subscriber)->assertSessionHasErrors('email');
    }

}
