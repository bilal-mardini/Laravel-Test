<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Log;
use App\Traits\BaseResponse;
use Throwable;

class Handler extends ExceptionHandler
{
    use BaseResponse; // Include the BaseResponse trait

    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // Handle ValidationException
        // $this->renderable(function (ValidationException $e, Request $request) {
        //     Log::error('Validation error in ' . $request->path(), [
        //         'message' => $e->getMessage(),
        //         'errors' => $e->errors(),
        //     ]);
        //     return $this->errorResponse('Validation failed', 422);
        // });

        // // Handle NotFoundHttpException
        // $this->renderable(function (NotFoundHttpException $e, Request $request) {
        //     Log::error('Not Found error in ' . $request->path(), [
        //         'message' => $e->getMessage(),
        //     ]);
        //     return $this->errorResponse('Resource not found', 404);
        // });

        // // Handle other exceptions
        // $this->renderable(function (Throwable $e, Request $request) {
        //     Log::error('General error in ' . $request->path(), [
        //         'message' => $e->getMessage(),
        //         'trace' => $e->getTraceAsString(),
        //     ]);
        //     return $this->errorResponse('An error occurred', $e->getCode() > 0 ? $e->getCode() : 500);
        // });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    public function render($request, Throwable $exception): JsonResponse
    {
        return parent::render($request, $exception);
    }
}
