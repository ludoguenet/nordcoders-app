<?php

declare(strict_types=1);

use App\Models\Tag;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\delete;

it('can destroy a tag', function () {
    createAndLoggedIn();

    $tag = Tag::factory()->create();

    delete(
        uri: route(
            name: 'dashboard.tags.destroy',
            parameters: [
                'tag' => $tag,
            ],
        ),
    )
        ->assertRedirect();

    assertDatabaseCount('tags', 0);
});
