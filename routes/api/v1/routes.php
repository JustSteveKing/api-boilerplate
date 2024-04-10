<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(static function (): void {
    Route::prefix('bookmarks')->as('bookmarks:')->group(
        base_path('routes/api/v1/bookmarks.php'),
    );
});
