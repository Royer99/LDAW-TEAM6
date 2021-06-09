<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;
class TitleTest extends TestCase
{
    /**
     * test migration.
     *
     * @return void
     */
    public function setUp(): void {
        parent::setUp();
        $this->artisan('migrate');
        $this->seed();
        
    }

    /**
     * Reset migrations after running tests.
     *
     * @return void
     */
    public function tearDown(): void {
        $this->artisan('migrate:reset');
        parent::tearDown();
    }

    public function testTitleInsertIncorrectParameters(){
        $response=$this->post('/api/title',['title'=>'name','description'=>'lol']);

        $response->assertStatus(422);
    }

    public function testTitleInsertIncompleteParameters(){
        $response=$this->post('/api/title',['title' => '1',
                                            'description' => '1',
                                            'edition' => '1']);

        $response->assertStatus(422);
    }

    public function testTitleInsertCorrect(){
        $response=$this->post('/api/title',['title' => 'Minecraft',
                                            'description' => 'FPS',
                                            'edition' => 'Java',
                                            'version' => '2.3',
                                            'image' => 'path']);

        $response->assertStatus(200);
    }

    public function testTitleIndex(){
        $response=$this->get('/api/title');
        $response->assertStatus(200);
        $response
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );

    }

    public function testTitleShow(){
        $response=$this->get('/api/title/1');
        //dd($response);
        $response->assertStatus(200);
        $title=$response->json();
        $this->assertDatabaseHas('titles', [
            'title' => $title["title"],
            'description' => $title["description"],
            'edition' => $title["edition"],
            'version' => $title["version"],
            'image' => $title["image"]
        ]);

    }

    public function testTitleUpdateIncorrectParameters(){
        $response=$this->patch('/api/title/1',['age' => '1',
                                            'data' => '1asdfg',
                                            'address' => '1']);

        $response->assertStatus(422);
    }

    public function testTitleUpdateIncompleteParameters(){
        $response=$this->patch('/api/title/1',['title' => '1',
                                            'description' => '1',
                                            'edition' => '1']);

        $response->assertStatus(422);
    }

    public function testTitleUpdateCorrect(){
        $response=$this->patch('/api/title/1',['title' => '1',
                                            'description' => '1',
                                            'edition' => '1',
                                            'version' => 'El juego esta intacto',
                                            'image' => 'path']);

        $response->assertStatus(200);
    }

}
