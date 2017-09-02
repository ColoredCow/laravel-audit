<?php

namespace App\Providers;

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
        $this->publishes([
	        __DIR__.'/Migrations/2017_09_01_080914_create_application_activity_audits_table.php' => 'database/migrations/2017_09_01_080914_create_application_activity_audits_table.php',
	    ]);

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
