<?php

namespace App\Providers;

use App\Services\BucketService;
use Illuminate\Support\ServiceProvider;

class PriceServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PriceServiceProviders::class, function ($app) {
            return new PriceServiceProviders($app->make(BucketService::class));
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
