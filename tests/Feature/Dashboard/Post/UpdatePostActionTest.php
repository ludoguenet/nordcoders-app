<?php

declare(strict_types=1);

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\get;
use function Pest\Laravel\put;

it('has an edit page', function () {
    createAndLoggedIn();
    $post = Post::factory()->create();

    get(
        uri: route(
            name: 'dashboard.posts.edit',
            parameters: [
                'post' => $post,
            ],
        ),
    )
        ->assertOk();
});

it('can update a post', function () {
    $user = User::factory()
        ->hasPosts()
        ->create();

    $tags = Tag::factory(3)->create();

    $post = $user->posts()->firstOrFail();

    actingAs($user);

    put(
        uri: route(
            name: 'dashboard.posts.update',
            parameters: [
                'post' => $post,
            ],
        ),
        data: [
            'title' => $title = fake()->sentence,
            'content' => $content = fake()->paragraphs(3, true),
            'selected_tags' => $tags->pluck('id')->implode(','),
        ],
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    $post->refresh();

    expect($post->title)->toBe($title);
    expect($post->slug)->toBe(\Illuminate\Support\Str::slug($title));
    expect($post->content)->toBe($content);
    expect($post->user_id)->toBe($user->id);
    expect($post->tags->pluck('id')->toArray())->toBe($tags->pluck('id')->toArray());

    assertDatabaseCount('posts', 1);
});
