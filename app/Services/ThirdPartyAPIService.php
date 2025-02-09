<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Notifications\JobFailedNotification;
use Exception;
use Illuminate\Support\Facades\Http;

class ThirdPartyAPIService
{
    public function processRequest(array $data, string $jobId)
    {
       
        try {
            $response = Http::post('https://example.com', $data);

            return $response;
        } catch (Exception $e) {
            Log::error("API request failed for job {$jobId}: " . $e->getMessage());
            throw $e; 
        }
    }

    public function handleFailure(string $jobId, array $data, Exception $exception)
    {
        Log::error("Job {$jobId} failed with exception: {$exception->getMessage()}", [
            'job_id' => $jobId,
            'data' => $data,
        ]);
        $user = auth()->user();
        Notification::send($user, new JobFailedNotification($jobId, $exception->getMessage()));
    }
}
