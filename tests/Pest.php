<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;

uses(
    Tests\TestCase::class,
    Illuminate\Foundation\Testing\RefreshDatabase::class,
)->in('Feature');

function createAndLoggedIn(
    array $attributes = [],
): User {
    $user = User::factory()->create($attributes);

    actingAs($user);

    return $user;
}
