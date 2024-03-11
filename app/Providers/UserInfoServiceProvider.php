<?php

namespace App\Providers;

use App\Services\ErrorService;
use App\Services\UserInfoService;
use Illuminate\Support\ServiceProvider;

class UserInfoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(UserInfoService::class, function ($app) {
            $userId = auth()->check() ? auth()->user()->id : 0;

            return new UserInfoService($app->make(ErrorService::class), $userId);
        });
    }

    public function boot(): void
    {
    }
}
