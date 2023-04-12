<?php

declare(strict_types=1);

use App\Actions\Post\StorePostAction;
use App\Models\User;

use function Pest\Laravel\assertDatabaseCount;

it('can store a post', function () {
    $user = User::factory()->create();

    $attributes = [
        'title' => $title = fake()->sentence,
        'content' => $content = fake()->paragraphs(3, true),
        'user_id' => $user->id,
    ];

    $post = app(StorePostAction::class)(
        $attributes,
    );

    expect($post->title)->toBe($title);
    expect($post->slug)->toBe(\Illuminate\Support\Str::slug($title));
    expect($post->content)->toBe($content);
    expect($post->user_id)->toBe($user->id);

    assertDatabaseCount('posts', 1);
});
