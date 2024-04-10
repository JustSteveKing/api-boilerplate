<?php

declare(strict_types=1);

namespace App\Http\Responses\V1;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use JustSteveKing\Tools\Http\Enums\Status;

final readonly class CollectionResponse implements Responsable
{
    public function __construct(
        private AnonymousResourceCollection $data,
    ) {
    }

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: $this->data,
            status: Status::OK->value,
        );
    }
}
