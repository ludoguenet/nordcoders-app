<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authenticate\StoreRequest;
use Illuminate\Http\RedirectResponse;

final class AuthenticateController extends Controller
{
    public function __invoke(
        StoreRequest $request,
    ): RedirectResponse {
        if (auth()->attempt($request->only(['email', 'password']))) {
            return redirect()->route('dashboard.index');
        }

        return redirect()
            ->route('login')
            ->withInput([
                'email',
            ])
            ->withErrors([
                'credentials' => 'bad credentials',
            ]);
    }
}
