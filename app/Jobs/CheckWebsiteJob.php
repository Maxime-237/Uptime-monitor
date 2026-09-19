<?php

namespace App\Jobs;

use App\Models\Website;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class CheckWebsiteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Website $website)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $start = microtime(true);

        try {
            $reponse = Http::timeout(10)->get($this->website->url);

            $statusCode = $reponse->status();
            $status = ($statusCode >= 200 && $statusCode < 400) ? 'up' : 'down';
        } catch (\Throwable $e) {
            $status = 'down';
            $statusCode = null;
        }

        $responseTime = (int) ((microtime(true) - $start) * 1000);

        $this->website->checks()->create([
            'status' => $status,
            'status_code' => $statusCode,
            'response_time' => $status === 'up' ? $responseTime : null,
        ]);
    }
}
