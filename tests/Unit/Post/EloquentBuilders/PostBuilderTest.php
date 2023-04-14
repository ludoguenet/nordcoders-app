<?php

declare(strict_types=1);

use App\Models\Post;

beforeEach(fn () => Post::factory(10)->create());

it('can get published posts', function () {
    $posts = Post::query()
        ->published()
        ->get();

    expect($posts)->each(static fn ($post) => $post->toBePublished());
});
