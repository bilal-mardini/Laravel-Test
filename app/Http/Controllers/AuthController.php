<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = $this->authService->register($data);
        return $this->successResponse('User registered successfully', ['user' => $user], 201);
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        $authData = $this->authService->login($credentials);
        return $this->successResponse(
            'Login successful',
            [
                'user' => $authData['user'],
                'token' => $authData['token']
            ],
        );
    }
    public function logout()
    {
        Auth::user()->tokens()->delete();
        return $this->successResponse('Logged out successfully');
    }
}
