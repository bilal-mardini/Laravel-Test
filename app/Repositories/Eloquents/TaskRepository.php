<?php

namespace App\Repositories\Eloquents;

use App\Models\Task;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    public function getAllTasks($limit = 10, $page = 1, $status = null)
    {
        $query = Task::query();
        if ($status) {
            $query->where('status', $status);
        }
        $query->with(['assignedTo', 'team']);
        return $query->skip(($page - 1) * $limit)->take($limit)->get();
    }
    public function getTasksForTeam($teamId, $limit = 10, $page = 1, $status = null)
    {
        $query = Task::where('team_id', $teamId);
        if ($status) {
            $query->where('status', $status);
        }
        $query->with(['assignedTo', 'team']);
        $totalTasks = $query->count();
        $tasks = $query->skip(($page - 1) * $limit)->take($limit)->get();
        return [
            'tasks' => $tasks,
            'meta' => [
                'current_page' => $page,
                'from' => ($page - 1) * $limit + 1,
                'last_page' => ceil($totalTasks / $limit),
                'per_page' => $limit,
                'to' => min($page * $limit, $totalTasks),
                'total' => $totalTasks,
            ],
        ];
    }
    public function findTaskById($id)
    {
        return Task::with(['assignedTo', 'team', 'createdBy'])->findOrFail($id);
    }
    public function createTask(array $data)
    {
        return Task::create($data);
    }
    public function updateTask($id, array $data)
    {
        $task = Task::findOrFail($id);
        $task->update($data);
        return $task;
    }
    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        return $task->delete();
    }
}
