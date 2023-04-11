<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ShowController extends Controller
{
    public function __invoke(
        Request $request,
        Post $post,
    ): View {
        return view(
            view: 'posts.show',
            data: [
                'post' => $post,
            ]
        );
    }
}
