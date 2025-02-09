<?php

namespace App\Services;

use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTasks($limit = 10, $page = 1, $status = null)
    {
        return $this->taskRepository->getAllTasks($limit, $page, $status);
    }
    public function getTasksForTeam($teamId, $limit = 10, $page = 1, $status = null)
    {
        return $this->taskRepository->getTasksForTeam($teamId, $limit, $page, $status);
    }

    public function findTaskById($id)
    {
        return $this->taskRepository->findTaskById($id);
    }

    public function createTask(array $data)
    {
        return $this->taskRepository->createTask($data);
    }

    public function updateTask($id, array $data)
    {
        return $this->taskRepository->updateTask($id, $data);
    }

    public function deleteTask($id)
    {
        return $this->taskRepository->deleteTask($id);
    }
}
