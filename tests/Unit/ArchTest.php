<?php

declare(strict_types=1);

test('arch')
    ->expect('Illuminate\Http\Request')
    ->not->toBeUsedIn('App\Http\Controllers');
