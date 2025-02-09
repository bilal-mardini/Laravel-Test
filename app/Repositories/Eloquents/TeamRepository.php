<?php

namespace App\Repositories\Eloquents;

use App\Models\Team;
use App\Models\TeamInvitation;
use App\Repositories\Interfaces\TeamRepositoryInterface;

class TeamRepository implements TeamRepositoryInterface
{
    public function getAllTeams($limit = 10, $page = 1)
    {
        return Team::with(['owner', 'tasks']) 
        ->skip(($page - 1) * $limit)
            ->take($limit)
            ->get();
    }

    public function findTeamById($id)
    {
        return Team::with(['owner', 'tasks']) 
        ->findOrFail($id);
    }

    public function createTeam(array $data)
    {
        return Team::create($data);
    }

    public function updateTeam($id, array $data)
    {
        $team = Team::findOrFail($id);
        $team->update($data);
        return $team;
    }

    public function deleteTeam($id)
    {
        $team = Team::findOrFail($id);
        return $team->delete();
    }
    public function createInvitation($teamId, $email, $invitedBy)
    {
        return TeamInvitation::create([
            'team_id' => $teamId,
            'email' => $email,
            'invited_by' => $invitedBy,
            'status' => 'pending'
        ]);
    }
}
