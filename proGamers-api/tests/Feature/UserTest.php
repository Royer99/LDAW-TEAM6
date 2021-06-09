<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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


    public function testUserInsertIncorrectParameters(){
        $response=$this->post('/api/user',['title'=>'name','description'=>'lol']);

        $response->assertStatus(422);
    }

    public function testUserInsertIncompleteParameters(){
        $response=$this->post('/api/user',['name' => 'Royer',
                                            'last_name' => 'arenas',
                                            'last_name2' => 'camacho',
                                            'phone_number' => '4611052923',
                                            'password' => '123456']);

        $response->assertStatus(422);
    }

    public function testUserInsertDuplicatedEmail(){
        $response=$this->post('/api/user',['name' => 'Royer',
                                            'last_name' => 'arenas',
                                            'last_name2' => 'camacho',
                                            'phone_number' => '4611052923',
                                            'email' => 'a01209400@itesm.mx',
                                            'password' => '123456']);

        $response->assertStatus(400);
    }

    public function testUserInsertCorrect(){
        $response=$this->post('/api/user',['name' => 'Royer',
                                            'last_name' => 'arenas',
                                            'last_name2' => 'camacho',
                                            'phone_number' => '4611052923',
                                            'email' => 'a01209403@itesm.mx',
                                            'password' => '123456']);

        $response->assertStatus(200);
    }


}
