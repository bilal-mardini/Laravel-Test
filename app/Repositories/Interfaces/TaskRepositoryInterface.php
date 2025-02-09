<?php

namespace App\Repositories\Interfaces;


interface TaskRepositoryInterface
{
    public function getAllTasks($limit = 10, $page = 1, $status = null);
    public function getTasksForTeam($teamId, $limit = 10, $page = 1, $status = null);
    public function findTaskById($id);
    public function createTask(array $data);
    public function updateTask($id, array $data);
    public function deleteTask($id);
}
