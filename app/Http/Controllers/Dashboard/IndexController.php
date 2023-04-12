<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(
        Request $request,
    ): View {
        return view('dashboard');
    }
}
