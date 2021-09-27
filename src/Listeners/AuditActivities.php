<?php

namespace ColoredCow\LaravelAudit\Listeners;

use ColoredCow\LaravelAudit\Models\ApplicationActivityAudit;

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
