<?php

declare(strict_types=1);

use App\Models\Tag;

use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\get;

it('can display tags', function () {
    $tags = Tag::factory(10)->create();

    $user = createAndLoggedIn();

    get(
        uri: route('dashboard.tags.index'),
    )
        ->assertOk()
        ->assertSee($tags->pluck('name')->toArray());

    assertAuthenticatedAs($user);
});
