<?php

namespace App\Services;

use App\Models\Team;
use App\Models\User;
use App\Notifications\TeamInviteNotification;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use Exception;

class TeamService
{
    protected $teamRepository;

    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function getAllTeams($limit = 10, $page = 1)
    {
        return $this->teamRepository->getAllTeams($limit, $page);
    }

    public function findTeamById($id)
    {
        return $this->teamRepository->findTeamById($id);
    }

    public function createTeam(array $data)
    {
        return $this->teamRepository->createTeam($data);
    }

    public function updateTeam($id, array $data)
    {
        return $this->teamRepository->updateTeam($id, $data);
    }

    public function deleteTeam($id)
    {
        return $this->teamRepository->deleteTeam($id);
    }
    public function inviteUserToTeam($teamId, $email, $invitedBy)
    {
        $team = $this->teamRepository->findTeamById($teamId);


        $invitee = User::where('email', $email)->firstOrFail();

        if ($team->users()->where('email', $email)->exists()) {
           throw new Exception('User is already a team member', 400);
        }

        $invitation = $this->teamRepository->createInvitation($teamId, $email, $invitedBy);

        $invitee->notify(new TeamInviteNotification($team));

        return $invitation;
    }
}
