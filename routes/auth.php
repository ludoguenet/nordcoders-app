<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(static function (): void {
    Route::get('login', LoginController::class)->name('login');
    Route::post('login', AuthenticateController::class)->name('authenticate');
});

Route::middleware(['auth', 'web'])->group(static function (): void {
    Route::get('logout', LogoutController::class)->name('logout');
});
