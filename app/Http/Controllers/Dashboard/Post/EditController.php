<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;

final class EditController extends Controller
{
    public function __invoke(
        Post $post,
    ): View {
        return view(
            view: 'dashboard.posts.edit',
            data: [
                'post' => $post,
                'tags' => Tag::all(),
            ],
        );
    }
}
