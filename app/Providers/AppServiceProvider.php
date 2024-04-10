<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Model::shouldBeStrict();


        RateLimiter::for(
            name: 'api',
            callback: static fn (Request $request) => [
                Limit::perMinute(
                    maxAttempts: 6000,
                )->by(
                    key: $request->bearerToken(),
                ),
                Limit::perSecond(
                    maxAttempts: 200,
                )->by(
                    key: $request->bearerToken(),
                ),
            ],
        );
    }
}
