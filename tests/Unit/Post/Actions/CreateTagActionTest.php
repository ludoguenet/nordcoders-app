<?php

declare(strict_types=1);

use App\Actions\Tag\StoreTagAction;
use App\Enums\Tag\TagColourEnum;

use function Pest\Laravel\assertDatabaseCount;

it('can store a post', function () {
    $attributes = [
        'name' => $name = fake()->word,
        'colour' => $colour = fake()->randomElement(TagColourEnum::cases()),
    ];

    $tag = app(StoreTagAction::class)(
        $attributes
    );

    expect($tag->name)->toBe($name);
    expect($tag->colour)->toBe($colour);

    assertDatabaseCount('tags', 1);
});
