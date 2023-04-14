<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Actions\Post\UpdatePostAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __invoke(
        Post $post,
        UpdateRequest $request,
    ): RedirectResponse {
        /**
         * @var  array{title: string, content: string, user_id: int, tag_ids: array<int, int>}  $attributes
         */
        $attributes = $request->validated();

        app(UpdatePostAction::class)(
          post: $post,
          attributes: $attributes,
        );

        return redirect()
            ->route('dashboard.posts.index')
            ->with('success', 'Post mis à jour');
    }
}
