<?php
namespace App\Listeners;

use App\Jobs\Scheduled\ScheduledTask;
use App\Jobs\StepJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\Events\JobFailed;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

/**
 * Created by PhpStorm.
 * User: vrubim
 * Date: 26/10/16
 * Time: 08:56
 */
class JobEventSubscriber
{
    use InteractsWithQueue;

    public function success(JobProcessed $event)
    {
        echo "success";

    }

    public function failed(JobFailed $event)
    {
        echo "failed";
    }

    public function processing(JobProcessing $event)
    {
        echo "processing";
    }

    public function subscribe($events)
    {
        $events->listen(
            JobProcessed::class,
            'App\Listeners\JobEventSubscriber@success'
        );

        $events->listen(
            JobFailed::class,
            'App\Listeners\JobEventSubscriber@failed'
        );

        $events->listen(
          JobProcessing::class,
            'App\Listeners\JobEventSubscriber@processing'
        );
    }
}