<?php

declare(strict_types=1);

namespace App\Actions\Tag;

use App\Models\Tag;

final class UpdateTagAction
{
    /**
     * @param  array{name: string, colour: string}  $attributes
     */
    public function __invoke(
        Tag $tag,
        array $attributes,
    ): Tag {
        return tap($tag)
            ->update([
                'name' => $attributes['name'],
                'colour' => $attributes['colour'],
            ])
            ->refresh();
    }
}
