<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;
   
    public function update(User $user, Task $task)
    {
        
        return $user->id === $task->created_by || $user->id === $task->team->owner_id;
    }
   
    public function delete(User $user, Task $task)
    {
        
        return $user->id === $task->created_by || $user->id === $task->team->owner_id;
    }
}
