<?php

namespace App\Providers;

use App\Services\BucketService;
use Illuminate\Support\ServiceProvider;

class BucketServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(BucketService::class, function ($app) {
            return new BucketService(auth()->check() ? auth()->user()->id : null);
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
