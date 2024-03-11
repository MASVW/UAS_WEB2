<?php

namespace App\Providers;

use App\Services\ErrorService;
use Illuminate\Support\ServiceProvider;

class ErrorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ErrorServiceProvider::class, function ($app){
            return new ErrorServiceProvider($app->make(ErrorService::class));
        });
    }

    public function boot(): void
    {
    }
}
