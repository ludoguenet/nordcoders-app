<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Post\PostStatusEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
final class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence,
            'slug' => Str::slug($title),
            'status' => $this->faker->randomElement(PostStatusEnum::cases()),
            'content' => $this->faker->paragraphs(3, true),
            'user_id' => User::factory(),
        ];
    }
}
