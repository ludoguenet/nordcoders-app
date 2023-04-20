<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

final class LogoutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
