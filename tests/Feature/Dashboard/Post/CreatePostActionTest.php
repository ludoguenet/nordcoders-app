<?php

declare(strict_types=1);

use App\Models\Post;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('has a create page', function () {
    createAndLoggedIn();

    get(
        uri: route('dashboard.posts.create'),
    )
        ->assertOk();
});

it('can store a post', function () {
    $user = createAndLoggedIn();

    post(
        uri: route('dashboard.posts.store'),
        data: [
            'title' => $title = fake()->sentence,
            'content' => $content = fake()->paragraphs(3, true),
        ]
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    $post = Post::first();

    expect($post->title)->toBe($title);
    expect($post->slug)->toBe(\Illuminate\Support\Str::slug($title));
    expect($post->content)->toBe($content);
    expect($post->user_id)->toBe($user->id);

    assertDatabaseCount('posts', 1);
});
