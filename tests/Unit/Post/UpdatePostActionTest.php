<?php

declare(strict_types=1);

use App\Actions\Post\UpdatePostAction;
use App\Models\Post;

use function Pest\Laravel\assertDatabaseCount;

it('can update a post', function () {
    $post = Post::factory()->create();

    $attributes = [
        'title' => $title = fake()->sentence,
        'content' => $content = fake()->paragraphs(3, true),
    ];

    $post = app(UpdatePostAction::class)(
        post: $post,
        attributes: $attributes,
    );

    expect($post->title)->toBe($title);
    expect($post->slug)->toBe(\Illuminate\Support\Str::slug($title));
    expect($post->content)->toBe($content);

    assertDatabaseCount('posts', 1);
});
