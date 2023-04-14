<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Tag\TagColourEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
final class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'colour' => $this->faker->randomElement(TagColourEnum::cases()),
        ];
    }
}
