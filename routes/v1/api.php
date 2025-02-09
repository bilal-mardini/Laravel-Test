<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function ($route) {
    $route->post('login', 'login');
    $route->post('register', 'register');
    $route->post('logout', 'logout');
});
Route::middleware('auth:sanctum')->group(function ($route) {
    Route::controller(AuthController::class)->group(function ($route) {
        $route->post('logout', 'logout');
    });
    $route->controller(TaskController::class)->prefix('tasks')->group(function ($route) {
        $route->get('/', 'index');
        $route->get('{team}', 'getTasksForTeam');
        $route->post('store', 'store');
        $route->get('show', 'show');
        $route->post('update/{id}', 'update');
        $route->delete('destroy/{id}', 'destroy');
    });
    $route->controller(TeamController::class)->prefix('teams')->group(function ($route) {
        $route->get('/', 'index');
        $route->post('store', 'store');
        $route->get('show', 'show');
        $route->post('update/{id}', 'update');
        $route->delete('destroy/{id}', 'destroy');
        $route->post('invite', 'inviteUserToTeam');
    });
});
