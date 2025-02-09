<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(TaskService $taskService)
    {
        $this->middleware('auth');
        $this->taskService = $taskService;
    }
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);
        $page = $request->input('page', 1);
        $status = $request->input('status');
        $tasks = $this->taskService->getAllTasks($limit, $page, $status);
        return $this->successResponse('Tasks retrieved successfully', TaskResource::collection($tasks));
    }
    public function getTasksForTeam(Request $request, $teamId)
    {
        $limit = $request->input('limit', 10);
        $page = $request->input('page', 1);
        $status = $request->input('status');
        $result = $this->taskService->getTasksForTeam($teamId, $limit, $page, $status);
        return $this->successResponse('Tasks retrieved successfully', [
            'tasks'=> TaskResource::collection($result['tasks']),
            'meta' => $result['meta'],
        ]);
    }
    public function show($id)
    {
        $task = $this->taskService->findTaskById($id);
        if ($task) {
            return $this->successResponse('Task retrieved successfully', new TaskResource($task));
        }
        return $this->errorResponse('Task not found', 404);
    }
    public function store(TaskRequest $request)
    {
        $team = Team::with('users')->find($request->input('team_id'));
        $task = $this->taskService->createTask($request->validated());
        return $this->successResponse('Task created successfully', new TaskResource($task), 201);
    }
    public function update(TaskRequest $request, $id)
    {
        $task = $this->taskService->findTaskById($id);
        $this->authorize('update', $task);
        $task = $this->taskService->updateTask($id, $request->validated());
        return $this->successResponse('Task updated successfully', new TaskResource($task));
    }
    public function destroy($id)
    {
        $task = $this->taskService->findTaskById($id);
        $this->authorize('delete', $task);
        $this->taskService->deleteTask($id);
        return $this->successResponse('Task deleted successfully');
    }
}
