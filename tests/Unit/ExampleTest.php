<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class ExampleTest extends TestCase
{
	use RefreshDatabase, MockeryPHPUnitIntegration;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function setUp()
    {
        
    }

    public function testBasicTest()
    {
        $this->assertEquals(4, 4);
    }

}