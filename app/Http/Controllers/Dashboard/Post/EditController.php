<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class EditController extends Controller
{
    public function __invoke(
        Post $post,
        Request $request
    ): View {
        return view(
            view: 'dashboard.posts.edit',
            data: [
                'post' => $post,
            ],
        );
    }
}
