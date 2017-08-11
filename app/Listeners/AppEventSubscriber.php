<?php
namespace App\Listeners;

use App\Events\AppDomainUpdated;
use App\Jobs\ConfigureAppDNSJob;
use App\Jobs\ProductSyncJob;
use App\Models\App;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Created by PhpStorm.
 * User: vrubim
 * Date: 26/10/16
 * Time: 08:56
 */
class AppEventSubscriber implements  ShouldQueue
{

    public function domainUpdated(AppDomainUpdated $event)
    {
        echo "domani updated";
    }

    public function subscribe($events)
    {
        $events->listen(
            AppDomainUpdated::class,
            'App\Listeners\AppEventSubscriber@domainUpdated'
        );

    }
}