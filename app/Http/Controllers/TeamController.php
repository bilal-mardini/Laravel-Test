<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\TeamService;
use App\Http\Requests\TeamRequest;
use App\Http\Resources\TeamResource;
use App\Notifications\TeamInviteNotification;

class TeamController extends Controller
{
    protected $teamService;
    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);
        $page = $request->input('page', 1);
        $teams = $this->teamService->getAllTeams($limit, $page);
        return $this->successResponse('Teams retrieved successfully', TeamResource::collection($teams));
    }
    public function show($id)
    {
        $team = $this->teamService->findTeamById($id);
        if ($team) {
            return $this->successResponse('Team retrieved successfully', new TeamResource($team));
        }
        return $this->errorResponse('Team not found', 404);
    }
    public function store(TeamRequest $request)
    {
        $team = $this->teamService->createTeam($request->validated());
        return $this->successResponse('Team created successfully', new TeamResource($team), 201);
    }
    public function update(TeamRequest $request, $id)
    {
        $team = $this->teamService->findTeamById($id);
        $this->authorize('update', $team);
        $team = $this->teamService->updateTeam($id, $request->validated());
        return $this->successResponse('Team updated successfully', new TeamResource($team));
    }
    public function destroy($id)
    {
        $team = $this->teamService->findTeamById($id);
        $this->authorize('delete', $team);
        $this->teamService->deleteTeam($id);
        return $this->successResponse('Team deleted successfully');
    }
    public function inviteUserToTeam(InvitationRequest $request)
    {
        $request->validated();

        $teamId = $request->input('team_id');
        $email = $request->input('email');

        $team = $this->teamService->findTeamById($teamId);

        $this->authorize('invite', $team);

        $this->teamService->inviteUserToTeam($teamId, $email, auth()->id());

        return $this->successResponse('Invitation sent successfully!', 201);
    }
    public function optimzeProblem()
    {
        $teams = Team::with(['owner', 'tasks.assignedTo'])->get();

        foreach ($teams as $team) {
            echo "Owner: " . $team->owner->name . "<br>";

            foreach ($team->tasks as $task) {
                echo "Assigned User: " . $task->assignedTo->email . "<br>";
            }
        }
    }
}

