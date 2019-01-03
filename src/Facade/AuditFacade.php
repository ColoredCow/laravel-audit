<?php
namespace ColoredCow\LaravelAudit\Facade;

use Illuminate\Support\Facades\Facade;

class AuditFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'audit'; }
}