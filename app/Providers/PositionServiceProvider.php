<?php

namespace App\Providers;

use App\Services\PositionService;
use Illuminate\Support\ServiceProvider;

class PositionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PositionService::class, function ($app){
            return new PositionService();
        });
    }

    public function boot(): void
    {
    }
}
