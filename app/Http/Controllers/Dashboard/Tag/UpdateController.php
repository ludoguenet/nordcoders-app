<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Actions\Tag\UpdateTagAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __invoke(
        UpdateRequest $request,
        Tag $tag,
    ): RedirectResponse {
        /**
         * @var array{name: string, colour: string} $validated
         */
        $validated = $request->validated();

        (new UpdateTagAction)(
            tag: $tag,
            attributes: $validated,
        );

        return redirect()
            ->route('dashboard.tags.index')
            ->with('success', 'Tag edité');
    }
}
