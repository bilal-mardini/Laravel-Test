<?php

namespace Tests\Feature;

use App\Models\Team;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetTasksForTeamTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_get_tasks_for_team_with_pagination()
    {
        
        $user = User::factory()->create();
        $team = Team::factory()->create();
        $team->users()->attach($user);
        
        Task::factory()->count(15)->create([
            'team_id' => $team->id,
            'created_by' => $user->id,
        ]);
        $this->actingAs($user);
        
        $response = $this->getJson("/api/v1/tasks/{$team->id}");
        
        $response->assertStatus(200);
        
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                'tasks' => [
                    '*' => [
                        'id',
                        'title',
                        'description',
                        'status',
                        'due_date',
                        'assigned_to',
                        'team',
                        'created_at',
                    ]
                    ],
                'meta' => [
                    'current_page',
                    'from',
                    'last_page',
                    'per_page',
                    'to',
                    'total',
                ],
            ],
          
        ]);
        
        $response->assertJsonCount(10, 'data.tasks');
    }
    public function test_can_filter_tasks_by_status_for_team()
    {
        
        $user = User::factory()->create();
        $team = Team::factory()->create();
        $team->users()->attach($user);
        Task::factory()->create([
            'team_id' => $team->id,
            'status' => 'completed',
            'created_by' => $user->id,
        ]);
        Task::factory()->create([
            'team_id' => $team->id,
            'status' => 'pending',
            'created_by' => $user->id,
        ]);
        $this->actingAs($user);
        
        $response = $this->getJson("/api/v1/tasks/{$team->id}?status=completed");
        
        $response->assertStatus(200);
        $response->assertJsonCount(1, 'data.tasks');
        $response->assertJsonFragment(['status' => 'completed']);
        
        $this->assertEquals(1, $response->json('data.meta.current_page'));
        $this->assertEquals(1, $response->json('data.meta.total'));
    }
    public function test_can_handle_custom_pagination_limit_and_page_for_team()
    {
        
        $user = User::factory()->create();
        $team = Team::factory()->create();
        $team->users()->attach($user);
        Task::factory()->count(20)->create([
            'team_id' => $team->id,
            'created_by' => $user->id,
        ]);
        $this->actingAs($user);
        
        $response = $this->getJson("/api/v1/tasks/{$team->id}?limit=5&page=2");
        
        $response->assertStatus(200);


        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                'tasks' => [
                    '*' => [
                        'id',
                        'title',
                        'description',
                        'status',
                        'due_date',
                        'assigned_to',
                        'team',
                        'created_at',
                    ]
                ],
                'meta' => [
                    'current_page',
                    'from',
                    'last_page',
                    'per_page',
                    'to',
                    'total',
                ],
            ],

        ]);
        
        $response->assertJsonCount(5, 'data.tasks');
        
        $this->assertEquals(2, $response->json('data.meta.current_page'));
        $this->assertEquals(20, $response->json('data.meta.total'));
        $this->assertEquals(5, $response->json('data.meta.per_page'));
        $this->assertEquals(4, $response->json('data.meta.last_page'));
    }
}
