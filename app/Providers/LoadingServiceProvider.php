<?php

namespace App\Providers;

use App\Services\LoadingService;
use Illuminate\Support\ServiceProvider;

class LoadingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(LoadingService::class, function($app){
            return new LoadingService();
        });
    }

    public function boot(): void
    {
    }
}
