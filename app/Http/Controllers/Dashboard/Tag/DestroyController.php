<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

final class DestroyController extends Controller
{
    public function __invoke(
        Tag $tag,
    ): RedirectResponse {
        $tag->delete();

        return redirect()->route('dashboard.tags.index');
    }
}
