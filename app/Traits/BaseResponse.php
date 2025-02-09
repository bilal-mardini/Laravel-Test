<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

trait BaseResponse  {

  /**
     * Building success response
     * @param $data
     * @param int $code
     * @return JsonResponse
     */
    public function successResponse(string $message = 'success', $data = null, int $statusCode = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
    /**
     * Building success response
     * @param $data
     * @param int $code
     * @return JsonResponse
     */
    public function errorResponse($message,$statusCode = Response::HTTP_BAD_REQUEST) {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
        ], $statusCode);
    }
     public function exceptionResponse(Exception $e, string $defaultMessage = 'An error occurred.'): JsonResponse
     {
        $statusCode = ($e && is_numeric($e->getCode()) && $e->getCode() > 0) 
        ? $e->getCode() 
        : Response::HTTP_INTERNAL_SERVER_ERROR;
            
         $message = $e->getMessage() ?: $defaultMessage;
 
         return response()->json([
             'status' => false,
             'message' => $message,
             'data' => null,
         ], $statusCode);
     }
   
}
