<?php

declare(strict_types=1);

use App\Models\Post;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\delete;

it('can destroy a post', function () {
    createAndLoggedIn();

    $post = Post::factory()->create();

    delete(
        uri: route(
            name: 'dashboard.posts.destroy',
            parameters: [
                'post' => $post,
            ],
        ),
    )
        ->assertRedirect();

    assertDatabaseCount('posts', 0);
});
