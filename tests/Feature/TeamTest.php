<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_create_team()
    {
        $user = User::factory()->create(); 
        $this->actingAs($user);

        
        $response = $this->postJson('/api/v1/teams/store', [
            'name' => 'Team A',
            'owner_id' => $user->id,
        ]);

        
        $response->assertStatus(201);
        $this->assertDatabaseHas('teams', ['name' => 'Team A', 'owner_id' => $user->id]);
    }

    public function test_unauthenticated_user_cannot_create_team()
    {
        
        $response = $this->postJson('/api/v1/teams/store', [
            'name' => 'Team B',
            'owner_id' => null,
        ]);

        
        $response->assertStatus(401);
    }

    public function test_team_creation_requires_name()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        
        $response = $this->postJson('/api/v1/teams/store', [
            'name' => '',
            'owner_id' => $user->id,
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['name']);
    }
}
