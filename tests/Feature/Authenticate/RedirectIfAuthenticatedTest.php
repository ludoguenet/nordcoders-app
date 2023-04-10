<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('can redirect logged in user to dashboard', function () {
    createAndLoggedIn();

    get(
        uri: route('login')
    )
        ->assertRedirectToRoute('dashboard.index');
});
