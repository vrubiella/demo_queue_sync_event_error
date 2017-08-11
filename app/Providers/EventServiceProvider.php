<?php

namespace App\Providers;

use App\Listeners\AppEventSubscriber;
use App\Listeners\JobEventSubscriber;
use App\Listeners\ProjectEventSubscriber;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];
    protected $subscribe = [
        AppEventSubscriber::class,
        JobEventSubscriber::class
    ];
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
