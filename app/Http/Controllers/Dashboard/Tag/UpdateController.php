<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class UpdateController extends Controller
{
    public function __invoke(
        Request $request,
        Tag $tag,
    ): RedirectResponse {
        $tag->update([
            'name' => $request->name,
            'colour' => $request->colour,
        ]);

        return redirect()
            ->route('dashboard.tags.index')
            ->with('success', 'Tag edité');
    }
}
