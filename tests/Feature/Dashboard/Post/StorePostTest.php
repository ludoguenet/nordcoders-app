<?php

declare(strict_types=1);

use App\Models\Post;
use App\Models\Tag;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('has a post create page', function () {
    createAndLoggedIn();

    get(
        uri: route('dashboard.posts.create'),
    )
        ->assertOk();
});

it('can store a post', function () {
    $user = createAndLoggedIn();
    $tags = Tag::factory(3)->create();

    post(
        uri: route('dashboard.posts.store'),
        data: [
            'title' => $title = fake()->sentence,
            'content' => $content = fake()->paragraphs(3, true),
            'selected_tags' => $tags->pluck('id')->implode(','),
        ],
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    $post = Post::first();

    expect($post->title)->toBe($title);
    expect($post->slug)->toBe(\Illuminate\Support\Str::slug($title));
    expect($post->content)->toBe($content);
    expect($post->user_id)->toBe($user->id);
    expect($post->tags->pluck('id')->toArray())->toBe($tags->pluck('id')->toArray());

    assertDatabaseCount('posts', 1);
});
