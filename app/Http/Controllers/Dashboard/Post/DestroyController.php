<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class DestroyController extends Controller
{
    public function __invoke(
        Post $post,
    ): RedirectResponse {
        $post->delete();

        return redirect()
            ->route('dashboard.posts.index')
            ->with('success', 'Post supprimé');
    }
}
