<?php

namespace App\Jobs;

use App\Models\App;
use App\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class ProjectSyncJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $project;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(App $project)
    {
        if (ends_with("","")) echo "Hola";
        $this->project = $project;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::debug("Handling job".get_class($this));
    }
}
