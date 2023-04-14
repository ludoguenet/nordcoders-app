<?php

declare(strict_types=1);

use App\Enums\Post\PostStatusEnum;
use App\Models\User;

use function Pest\Laravel\actingAs;

uses(
    Tests\TestCase::class,
    Illuminate\Foundation\Testing\RefreshDatabase::class,
)->in('Feature', 'Unit');

function createAndLoggedIn(
    array $attributes = [],
): User {
    $user = User::factory()->create($attributes);

    actingAs($user);

    return $user;
}

expect()->extend('toBePublished', function () {
    return $this->status->toBe(PostStatusEnum::PUBLISHED);
});
