<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
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


    public function testGameInsertIncorrectParameters(){
        $token = $this->postJson('api/login', [
            'email'=>'A01209400@itesm.mx',
            'password'=>'12345',
            "device_name"=> "royerxps"
        ])->json()["token"];
        $response=$this->withToken($token)->post('/api/game',['game'=>'name','description'=>'lol']);
        $response->assertStatus(422);
    }

    public function testGameInsertIncompleteParameters(){
        $token = $this->postJson('api/login', [
            'email'=>'A01209400@itesm.mx',
            'password'=>'12345',
            "device_name"=> "royerxps"
        ])->json()["token"];
        $response=$this->withToken($token)->post('/api/game',['title_id' => '1',
                                            'user_id' => '1',
                                            'platform_id' => '1']);

        $response->assertStatus(422);
    }

    public function testGameInsertCorrect(){
        $token = $this->postJson('api/login', [
            'email'=>'A01209400@itesm.mx',
            'password'=>'12345',
            "device_name"=> "royerxps"
        ])->json()["token"];
        $response=$this->withToken($token)->post('/api/game',['title_id' => '1',
                                            'user_id' => '1',
                                            'platform_id' => '1',
                                            'description' => 'En empaque, totalmente nuevo']);

        $response->assertStatus(200);
    }

    /*
    public function testGameIndex(){
        $response=$this->get('/api/game');
        $response->assertStatus(200);
        $response
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );

    }

    public function testGameShow(){
        $response=$this->get('/api/game/1');
        //dd($response);
        $response->assertStatus(200);
        $game=$response->json();
        $this->assertDatabaseHas('games', [
            'game' => $game["game"],
            'description' => $game["description"],
            'edition' => $game["edition"],
            'version' => $game["version"],
            'image' => $game["image"]
        ]);

    }

    public function testGameUpdateIncorrectParameters(){
        $response=$this->patch('/api/game/1',['age' => '1',
                                            'data' => '1asdfg',
                                            'address' => '1']);

        $response->assertStatus(422);
    }

    public function testGameUpdateIncompleteParameters(){
        $response=$this->patch('/api/game/1',['game' => '1',
                                            'description' => '1',
                                            'edition' => '1']);

        $response->assertStatus(422);
    }

    public function testGameUpdateCorrect(){
        $response=$this->patch('/api/game/1',['game' => '1',
                                            'description' => '1',
                                            'edition' => '1',
                                            'version' => 'El juego esta intacto',
                                            'image' => 'path']);

        $response->assertStatus(200);
    }

    */
}
