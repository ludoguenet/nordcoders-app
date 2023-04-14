<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class CreateController extends Controller
{
    public function __invoke(
        Request $request
    ): View {
        return view('dashboard.posts.create', [
            'tags' => Tag::all(),
        ]);
    }
}
