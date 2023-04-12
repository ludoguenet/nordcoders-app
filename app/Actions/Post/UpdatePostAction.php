<?php

declare(strict_types=1);

namespace App\Actions\Post;

use App\Models\Post;
use Illuminate\Support\Str;

final class UpdatePostAction
{
    /**
     * @param  array{title: string, content: string}  $attributes
     */
    public function __invoke(
        Post $post,
        array $attributes,
    ): Post {
        $post->update([
            'title' => $title = $attributes['title'],
            'slug' => Str::slug(strval($title)),
            'content' => $attributes['content'],
        ]);

        return $post->refresh();
    }
}
