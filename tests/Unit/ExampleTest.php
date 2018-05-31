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
        parent::setUp();
        app()->bind(ABC::class, function () {
            return Mockery::mock(ABC::class, function ($m) {
                $m->shouldReceive('calc')->andReturn(4);
            });
        });
    }

    public function testBasicTest()
    {
        $abc = app()->make(ABC::class);
        $i = $abc->calc();
        $this->assertEquals(4, $i);
    }

}