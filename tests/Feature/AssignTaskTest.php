<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Team;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AssignTaskTest extends TestCase
{
    use RefreshDatabase;
    public function test_authenticated_user_can_create_task_in_team()
    {
        $user = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $user->id]);
        $team->users()->attach($user->id);
        $this->actingAs($user);
        $response = $this->postJson('/api/v1/tasks/store', [
            'title' => 'Task A',
            'description' => 'Task description',
            'assigned_to' => $user->id,
            'status' => 'pending',
            'due_date' => now()->addDays(5)->toDateString(),
            'team_id' => $team->id,
            'created_by' => $user->id
        ]);
        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', ['title' => 'Task A', 'team_id' => $team->id]);
    }
    public function test_unauthorized_user_cannot_edit_task()
    {
        $owner = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $owner->id]);
        $user = User::factory()->create();
        $task = Task::factory()->create(['team_id' => $team->id, 'assigned_to' => $user->id]);
        $this->actingAs($user);
        $response = $this->postJson("/api/v1/tasks/update/{$task->id}", [
            'title' => 'Updated Task Title',
            'description' => 'Updated description',
            'assigned_to' => $user->id,
            'status' => 'pending',
            'due_date' => now()->addDays(5)->toDateString(),
            'team_id' => $team->id,
            'created_by' => $user->id
        ]);
        $response->assertStatus(403);
    }
    public function test_unauthorized_user_cannot_delete_task()
    {
        $owner = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $owner->id]);
        $user = User::factory()->create();
        $task = Task::factory()->create(['team_id' => $team->id, 'assigned_to' => $user->id]);
        $this->actingAs($user);
        $response = $this->deleteJson("/api/v1/tasks/destroy/{$task->id}");
        $response->assertStatus(403);
    }
    public function test_task_creation_requires_due_date_in_future()
    {
        $user = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $user->id]);
        $this->actingAs($user);
        $response = $this->postJson('/api/v1/tasks/store', [
            'title' => 'Task with Past Due Date',
            'description' => 'Task description',
            'assigned_to' => $user->id,
            'status' => 'pending',
            'due_date' => now()->subDays(1)->toDateString(),
            'team_id' => $team->id,
            'created_by' => $user->id
        ]);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['due_date']);
    }
    public function test_team_owner_can_edit_team()
    {
        $user = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $user->id]);
        $this->actingAs($user);

        $response = $this->postJson("/api/v1/teams/update/{$team->id}", [
            'name' => 'Updated Team Name',
            'owner_id' => $user->id

        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('teams', ['id' => $team->id, 'name' => 'Updated Team Name']);
    }

    public function test_non_owner_cannot_edit_team()
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $owner->id]);
        $this->actingAs($otherUser);

        $response = $this->postJson("/api/v1/teams/update/{$team->id}", [
            'name' => 'Hacked Team Name',
            'owner_id'=>$owner->id
        ]);

        $response->assertStatus(403);
    }

    public function test_team_owner_can_delete_team()
    {
        $user = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $user->id]);
        $this->actingAs($user);

        $response = $this->deleteJson("/api/v1/teams/destroy/{$team->id}");

        $response->assertStatus(200);
        $this->assertDatabaseMissing('teams', ['id' => $team->id]);
    }

    public function test_non_owner_cannot_delete_team()
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $team = Team::factory()->create(['owner_id' => $owner->id]);
        $this->actingAs($otherUser);

        $response = $this->deleteJson("/api/v1/teams/destroy/{$team->id}");

        $response->assertStatus(403);
        $this->assertDatabaseHas('teams', ['id' => $team->id]);
    }
}
