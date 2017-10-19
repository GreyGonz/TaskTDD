<?php

namespace Tests\Feature;

use App\Task;
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
        $tasks = factory(Task::class, 10)->create();
        $user->tasks()->saveMany($tasks);

        // Execute

        $this->withoutExceptionHandling();

        $response = $this->get('user/'.$user->id.'/tasks');

        $response->assertSuccessful();
        $response->assertViewIs('user_tasks');
        $response->assertViewHas('tasks', $user->tasks);
        $response->assertViewHas('user', $user);

        $response->assertSeeText($user->name . ' Tasks:');

        foreach($tasks as $task){
            $response->assertSeeText($task->name);
        }

        // Comprovacions



    }
}
