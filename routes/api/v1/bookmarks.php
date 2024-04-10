<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\Bookmarks\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
