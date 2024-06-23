<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Test\Test;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('test', function() {
            return new Test(config('example'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
