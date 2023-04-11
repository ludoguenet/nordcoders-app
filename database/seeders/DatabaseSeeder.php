<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\Post\PostStatusEnum;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->has(
                Post::factory(30)
                    ->state(new Sequence(
                        ['status' => PostStatusEnum::DRAFT],
                        ['status' => PostStatusEnum::PUBLISHED],
                    )),
            )
            ->create([
                'name' => 'Nord Coders',
                'email' => 'contact@nordcoders.fr',
                'password' => Hash::make('admin'),
            ]);
    }
}
