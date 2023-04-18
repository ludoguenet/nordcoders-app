<?php

declare(strict_types=1);

use App\Actions\Tag\UpdateTagAction;
use App\Enums\Tag\TagColourEnum;
use App\Models\Tag;

use function Pest\Laravel\assertDatabaseCount;

it('can update a post', function () {
    $tag = Tag::factory()->create();

    $attributes = [
        'name' => $name = fake()->word,
        'colour' => $colour = fake()->randomElement(TagColourEnum::cases()),
    ];

    $tag = app(UpdateTagAction::class)(
        tag: $tag,
        attributes: $attributes,
    );

    expect($tag->name)->toBe($name);
    expect($tag->colour)->toBe($colour);

    assertDatabaseCount('tags', 1);
});
