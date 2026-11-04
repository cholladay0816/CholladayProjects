<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Christian Holladay');
        $response->assertSee('My GitHub Stats');
    }

    public function testAuthenticationPagesStillRender()
    {
        foreach (['/login', '/register', '/forgot-password'] as $path) {
            $this->get($path)->assertOk();
        }
    }
}
