<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

final class StoreController extends Controller
{
    public function __invoke(
        StoreRequest $request,
    ): RedirectResponse {
        /**
         * @var array{name: string, colour: string} $validated
         */
        $validated = $request->validated();

        Tag::create([
            'name' => $validated['name'],
            'colour' => $validated['colour'],
        ]);

        return redirect()
            ->route('dashboard.tags.index')
            ->with('success', 'Le tag a été créé');
    }
}
