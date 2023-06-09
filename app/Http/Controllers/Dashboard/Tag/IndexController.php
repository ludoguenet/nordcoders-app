<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        return view(
            view: 'dashboard.tags.index',
            data: [
                'tags' => Tag::all(),
            ],
        );
    }
}
