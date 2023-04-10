<?php

declare(strict_types=1);

use function Pest\Laravel\assertGuest;
use function Pest\Laravel\get;

it('can log out', function () {
    createAndLoggedIn();

    get(
        uri: route('logout'),
    )
        ->assertRedirectToRoute('login');

    assertGuest();
});
