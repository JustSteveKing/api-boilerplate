<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Bookmark;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Steve McDougall',
            'email' => 'juststevemcd@gmail.com',
            'profile_photo_path' => 'https://github.com/juststeveking.png',
        ]);

        Bookmark::factory()->for($user)->count(10)->create();
    }
}
