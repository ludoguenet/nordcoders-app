<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertGuest;
use function Pest\Laravel\get;

it('can log out', function () {
    actingAs(User::factory()->create());

    get(
        uri: route('dashboard.logout'),
    )
        ->assertRedirectToRoute('login');

    assertGuest();
});
