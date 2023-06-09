<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::query()
            ->with([
                'author',
                'tags',
            ])
            ->published()
            ->orderByDesc('created_at')
            ->simplePaginate(15);

        return view(
            view: 'posts.index',
            data: [
                'posts' => $posts,
            ],
        );
    }
}
