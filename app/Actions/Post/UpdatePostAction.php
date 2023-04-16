<?php

declare(strict_types=1);

namespace App\Actions\Post;

use App\Models\Post;
use Illuminate\Support\Str;

final class UpdatePostAction
{
    /**
     * @param  array{title: string, content: string, user_id: int, tag_ids: array<int, int>}  $attributes
     */
    public function __invoke(
        Post $post,
        array $attributes,
    ): Post {
        $post = tap($post)
            ->update([
                'title' => $title = $attributes['title'],
                'slug' => Str::slug(strval($title)),
                'content' => $this->addTailwindClassesToHeadings($attributes['content']),
            ]);

        $post->tags()->sync($attributes['tag_ids']);

        return $post->refresh();

    }

    /**
     * TODO - refactor into TailwindParserClass
     */
    private function addTailwindClassesToHeadings(
        string $content,
    ): string {
        /**
         * @var string $h3Parsedcontent
         */
        $h3Parsedcontent = preg_replace('/<h3>(.*?)<\/h3>/', '<h3 class="text-2xl font-semibold">$1</h3>', $content);

        return $h3Parsedcontent;
    }
}
