<?php

declare(strict_types=1);

namespace App\Http\Resources\V1;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Bookmark $resource
 */
final class BookmarkResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'url' => $this->resource->url,
        ];
    }
}
