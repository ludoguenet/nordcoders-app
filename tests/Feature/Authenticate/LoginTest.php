<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('has a login page', function () {
    get(
        uri: route('login'),
    )
        ->assertOk()
        ->assertSee('Se connecter');
});
