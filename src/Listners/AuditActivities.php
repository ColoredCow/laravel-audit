<?php

namespace ColoredCow\LaravelAudit\Listners;

use App\Events\UpdateFacilityCoordinates;
use App\Models\ApplicationActivityAudit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuditActivities
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UpdateFacilityCoordinates  $event
     * @return void
     */
    public function handle($event)
    {
        ApplicationActivityAudit::create($event->getAudit());
    }
}
