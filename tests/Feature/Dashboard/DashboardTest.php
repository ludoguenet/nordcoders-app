<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('can show dashboard', function () {
    $user = createAndLoggedIn();

    get(
        uri: route('dashboard.index')
    )
        ->assertOk()
        ->assertSee('Hello ' . $user->name);
});
