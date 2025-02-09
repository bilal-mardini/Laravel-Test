<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;
   
    public function update(User $user, Team $team)
    {
        return $user->id === $team->owner_id;
    }
    public function delete(User $user, Team $team)
    {
        return $user->id === $team->owner_id;
    }
    public function invite(User $user, Team $team)
    {
        return $user->id === $team->owner_id;
    }
}
