<?php

declare(strict_types=1);

use App\Enums\Tag\TagColourEnum;
use App\Models\Tag;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\get;
use function Pest\Laravel\put;

it('has a tag edit page', function () {
    createAndLoggedIn();
    $tag = Tag::factory()->create();

    get(
        uri: route(
            name: 'dashboard.tags.edit',
            parameters: [
                'tag' => $tag,
            ],
        ),
    )
        ->assertOk();
});

it('can update a tag', function () {
    $tag = Tag::factory()->create();

    createAndLoggedIn();

    put(
        uri: route(
            name: 'dashboard.tags.update',
            parameters: [
                'tag' => $tag,
            ],
        ),
        data: [
            'name' => $name = fake()->word,
            'colour' => $colour = fake()->randomElement(TagColourEnum::cases())->value,
        ],
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    $tag->refresh();

    expect($tag->name)->toBe($name);
    expect($tag->colour->value)->toBe($colour);

    assertDatabaseCount('tags', 1);
});
