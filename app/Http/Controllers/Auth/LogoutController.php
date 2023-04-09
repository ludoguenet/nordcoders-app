<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class LogoutController extends Controller
{
    public function __invoke(
        Request $request,
    ): RedirectResponse {
        auth()->logout();

        return redirect()->route('login');
    }
}
