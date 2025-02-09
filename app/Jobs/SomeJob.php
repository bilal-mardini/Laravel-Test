<?php

namespace App\Jobs;

use App\Services\ThirdPartyAPIService;
use App\Notifications\JobFailedNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SomeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $jobId;
    protected $data;
    public function __construct(string $jobId, array $data)
    {
        $this->jobId = $jobId;
        $this->data = $data;
    }
    public function handle(ThirdPartyAPIService $apiService)
    {
        if ($this->hasJobAlreadyProcessed()) {
            Log::info("Job {$this->jobId} has already been processed.");
            return;
        }
        try {
            $response = $apiService->processRequest($this->data, $this->jobId);
            if ($response->failed()) {
                throw new Exception('API request failed');
            }
            $this->markJobAsProcessed();
            Log::info("API request processed successfully for job {$this->jobId}");
        } catch (Exception $e) {
            $apiService->handleFailure($this->jobId, $this->data, $e);
            if ($this->attempts() >= 3) {
                $this->sendFailureNotification($e);
            }
            throw $e;
        }
    }
    protected function hasJobAlreadyProcessed()
    {
        return Cache::has('job_processed_' . $this->jobId);
    }
    protected function markJobAsProcessed()
    {
        Cache::put('job_processed_' . $this->jobId, true, now()->addMinutes(10));
    }
    protected function sendFailureNotification(Exception $e)
    {
        $user = auth()->user();
        Notification::send($user, new JobFailedNotification($this->jobId, $e->getMessage()));
    }
    public function backoff()
    {
        return [10, 30, 60, 120];
    }
    public function retryUntil()
    {
        return now()->addMinutes(15);
    }
}
