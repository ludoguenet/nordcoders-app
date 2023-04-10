<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\get;

it('can get posts', function () {
    User::factory()
        ->hasPosts(5)
        ->create();

    get(
        uri: route('posts.index'),
    )
        ->assertOk();
});
