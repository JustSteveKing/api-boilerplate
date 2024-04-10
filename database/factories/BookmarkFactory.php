<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Bookmark;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class BookmarkFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Bookmark::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'url' => $this->faker->unique()->url(),
            'user_id' => User::factory(),
        ];
    }
}
