<?php

declare(strict_types=1);

namespace App\Actions\Tag;

use App\Models\Tag;

final class StoreTagAction
{
    /**
     * @param  array{name: string, colour: string}  $attributes
     */
    public function __invoke(
        array $attributes,
    ): Tag {
        return Tag::create([
            'name' => $attributes['name'],
            'colour' => $attributes['colour'],
        ]);
    }
}
