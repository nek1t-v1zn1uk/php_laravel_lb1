<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/echo?mode=test');

        $response->assertStatus(200);

        $response->assertJson([
            'message' => 'Echo',
            'mode' => 'test',
        ]);
    }
}
