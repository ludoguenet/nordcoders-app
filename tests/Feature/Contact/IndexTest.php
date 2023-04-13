<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('has a contact page', function () {
    get(
        uri: route('contact.index'),
    )
        ->assertOk();
});
