<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Actions\Post\StorePostAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Post\StoreRequest;
use Illuminate\Http\RedirectResponse;

final class StoreController extends Controller
{
    public function __invoke(
        StoreRequest $request,
    ): RedirectResponse {
        /**
         * @var array{title: string, content: string, user_id: int} $attributes
         */
        $attributes = $request->validated();

        app(StorePostAction::class)(
            $attributes,
        );

        return redirect()
            ->route('dashboard.posts.index')
            ->with('success', 'Post créé');
    }
}
