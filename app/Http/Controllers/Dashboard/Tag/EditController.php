<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

final class EditController extends Controller
{
    public function __invoke(
        Tag $tag,
    ): View {
        return view(
            view: 'dashboard.tags.edit',
            data: [
                'tag' => $tag,
            ],
        );
    }
}
