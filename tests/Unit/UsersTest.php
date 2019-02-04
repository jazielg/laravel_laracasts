<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_a_user_can_have_projects() {
        $user = Factory('App\User')->create();
        $user->projects()->create(['title' => 'Project', 'description' => 'Project from a user']);
        $this->assertEquals('Project', $user->projects()->first()->title);
    }
}
