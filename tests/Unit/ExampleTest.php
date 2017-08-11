<?php

namespace Tests\Unit;

use App\Events\AppDomainUpdated;
use App\Events\ProjectUpdated;
use App\Jobs\ProjectSyncJob;
use App\Models\App;
use App\Models\Product;
use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testProjectEventSubscriber_ProjectUpdated()
    {
        $this->expectsJobs([ProjectSyncJob::class]);

        event(new AppDomainUpdated());
    }
}
