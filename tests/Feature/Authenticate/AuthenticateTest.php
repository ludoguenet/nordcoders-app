<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\post;

it('can authenticate user', function () {
    $password = fake()->password(8);
    $user = User::factory()->create([
        'email' => $email = fake()->email,
        'password' => \Illuminate\Support\Facades\Hash::make($password),
    ]);

    post(
        uri: route('authenticate'),
        data: [
            'email' => $email,
            'password' => $password,
        ]
    )
        ->assertRedirect(route('dashboard.index'));

    assertAuthenticatedAs($user);
});

it('redirects if bad credentials', function () {
    $password = fake()->password(8);
    User::factory()->create([
        'email' => fake()->email,
        'password' => \Illuminate\Support\Facades\Hash::make($password),
    ]);

    post(
        uri: route('authenticate'),
        data: [
            'email' => 'bad@email.fr',
            'password' => '12456789',
        ]
    )
        ->assertRedirectToRoute('login')
        ->assertSessionHasErrors();
});
