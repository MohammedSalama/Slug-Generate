<?php

namespace Wdd\Slug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../src/Database/Migrations');
        $this->loadViewsFrom(__DIR__ .'/../src/views','wdd/slug');
    }
}
