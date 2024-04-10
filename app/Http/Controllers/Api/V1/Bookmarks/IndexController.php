<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Bookmarks;

use App\Http\Resources\V1\BookmarkResource;
use App\Http\Responses\V1\CollectionResponse;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

final readonly class IndexController
{
    public function __construct(
        private AuthManager $auth,
    ) {
    }

    public function __invoke(Request $request): CollectionResponse
    {
        return new CollectionResponse(
            data: BookmarkResource::collection(
                resource: $this->auth->user()->bookmarks,
            ),
        );
    }
}
