<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewUsersTasks extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function an_user_can_see_his_own_tasks()
    {
        // Prepare

        $user = factory(User::class)->create();
        $task = factory(Task::class, 5)->create();

        // Execute

        $this->get('user/{user}/tasks');

        // Comprovacions



    }
}
