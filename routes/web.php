<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app');

Route::view('login', 'auth.login')->name('login');
Route::post('login', AuthenticateController::class)->name('authenticate');

Route::middleware(['auth', 'web'])
    ->group(static function (): void {
        Route::prefix('dashboard')
            ->as('dashboard.')
            ->group(static function (): void {
                Route::view('/', 'dashboard')->name('index');
                Route::get('logout', LogoutController::class)->name('logout');
            });
    });
