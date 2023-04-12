<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\put;

it('can update a post', function () {
    $user = User::factory()
        ->hasPosts()
        ->create();

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
        ]
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    $post->refresh();

    expect($post->title)->toBe($title);
    expect($post->slug)->toBe(\Illuminate\Support\Str::slug($title));
    expect($post->content)->toBe($content);
    expect($post->user_id)->toBe($user->id);

    assertDatabaseCount('posts', 1);
});
