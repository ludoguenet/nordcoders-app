<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(
        Request $request
    ): View {
        $posts = Post::query()
            ->where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->paginate(15);

        return view(
            view: 'dashboard.posts.index',
            data: [
                'posts' => $posts,
            ],
        );
    }
}
