<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Treblle\Middlewares\TreblleMiddleware;

Route::middleware(TreblleMiddleware::class)->group(static function (): void {
    Route::prefix('v1')->as('api:v1:')->group(
        base_path('routes/api/v1/routes.php'),
    );
});
