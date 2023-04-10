<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->hasPosts(3)
            ->create([
                'name' => 'Nord Coders',
                'email' => 'contact@nordcoders.fr',
                'password' => Hash::make('admin'),
            ]);
    }
}
