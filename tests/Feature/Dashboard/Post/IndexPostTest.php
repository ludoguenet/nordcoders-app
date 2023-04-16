<?php

declare(strict_types=1);

use App\Models\Post;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\get;

it('can display user posts', function () {
    $post = Post::factory(10)
        ->forAuthor()
        ->create()
        ->first();

    actingAs($post->author);

    get(
        uri: route('dashboard.posts.index'),
    )
        ->assertOk()
        ->assertSee($post->title);

    assertAuthenticatedAs($post->author);
});
