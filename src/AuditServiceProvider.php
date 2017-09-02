<?php

namespace ColoredCow\LaravelAudit;

use Illuminate\Support\ServiceProvider;

class AuditServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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
