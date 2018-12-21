<?php

namespace ColoredCow\LaravelAudit;

use Illuminate\Support\ServiceProvider;
use ColoredCow\LaravelAudit\AuditService;

class AuditServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('audit', function ($app) {
            return new AuditService;
        });
	    $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
