<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

final class CreateController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard.posts.create', [
            'tags' => Tag::all(),
        ]);
    }
}
