<?php

declare(strict_types=1);

namespace App\Actions\Post;

use App\Models\Post;
use Illuminate\Support\Str;

final class StorePostAction
{
    /**
     * @param  array{title: string, content: string, user_id: int, tag_ids: array<int, int>}  $attributes
     */
    public function __invoke(
        array $attributes,
    ): Post {
        $post = Post::create([
            'title' => $title = $attributes['title'],
            'slug' => Str::slug(strval($title)),
            'content' => $attributes['content'],
            'user_id' => $attributes['user_id'],
        ]);

        $post->tags()->attach($attributes['tag_ids']);

        return $post->refresh();
    }
}
