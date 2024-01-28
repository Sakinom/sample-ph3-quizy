<?php

namespace Tests\Feature;

use App\Choice;
use App\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $id = 2;
        $response = $this->get("/quiz/{$id}");
    
        // ページが存在していることを確認する
        $response->assertStatus(200);
    }
}
