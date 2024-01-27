<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\BigQuestion;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexTest extends TestCase
{
    use DatabaseTransactions;

    private $dummyData;

    public function setUp(): void
    {
        parent::setUp();

        // ダミーデータをデータベースに追加
        $this->dummyData = factory(BigQuestion::class)->create();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('東京の難読地名クイズ');
        $this->assertDatabaseHas('big_questions', [
            'name' => $this->dummyData->name,
        ]);
        $response->assertSeeText($this->dummyData->name);
    }
}
