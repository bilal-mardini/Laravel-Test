<?php

namespace App\Repositories\Interfaces;


interface TeamRepositoryInterface
{
    public function getAllTeams($limit = 10, $page = 1);
    public function findTeamById($id);
    public function createTeam(array $data);
    public function updateTeam($id, array $data);
    public function deleteTeam($id);
    public function createInvitation($teamId, $email, $invitedBy);
}
