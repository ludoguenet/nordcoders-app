<?php

declare(strict_types=1);

use App\Enums\Tag\TagColourEnum;
use App\Models\Tag;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('has a tag create page', function () {
    createAndLoggedIn();

    get(
        uri: route('dashboard.tags.create'),
    )
        ->assertOk();
});

it('can store a tag', function () {
    createAndLoggedIn();

    post(
        uri: route('dashboard.tags.store'),
        data: [
            'name' => $name = fake()->word,
            'colour' => $colour = fake()->randomElement(TagColourEnum::cases())->value,
        ],
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    $tag = Tag::first();

    expect($tag->name)->toBe($name);
    expect($tag->colour->value)->toBe($colour);

    assertDatabaseCount('tags', 1);
});
