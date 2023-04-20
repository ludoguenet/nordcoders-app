<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class CreateController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard.tags.create');
    }
}
