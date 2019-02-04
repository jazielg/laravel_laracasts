<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
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

    public function test_guests_may_not_create_projects() {
        $this->post('/projects')->assertRedirect('/login');
    }

    public function test_a_user_can_create_a_project() {
        $this->actingAs(factory('App\User')->create());
        $attributes = ['title' => 'Test', 'description' => 'Testing add to table'];
        $this->post('/projects', $attributes);
        $this->assertDatabaseHas('projects', $attributes);
    }
}
