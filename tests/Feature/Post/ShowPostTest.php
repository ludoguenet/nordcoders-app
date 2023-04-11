<?php

declare(strict_types=1);

use App\Models\Post;

use function Pest\Laravel\get;

it('can show post', function () {
    $post = Post::factory()->create();

    get(
        uri: route('posts.show', $post),
    )
        ->assertOk()
        ->assertSee($post->title);
});

it('can not show post', function () {
    $post = Post::factory()->create();

    get(
        uri: route('posts.show', 'test'),
    )
        ->assertStatus(404)
        ->assertDontSee($post->title);
});
