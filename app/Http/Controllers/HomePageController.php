<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

final class HomePageController extends Controller
{
    public function __invoke(
        Request $request,
    ): View {
        return view('homepage');
    }
}
