<?php

declare(strict_types=1);

use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Posts\IndexController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app')->name('homepage');

Route::middleware(['auth', 'web'])->group(static function (): void {
    Route::prefix('dashboard')
        ->as('dashboard.')
        ->group(static function (): void {
            Route::view('/', 'dashboard')->name('index');
        });
});

Route::prefix('posts')
    ->as('posts.')
    ->group(static function (): void {
        Route::get('/', IndexController::class)->name('index');
        Route::get('{post:slug}', ShowController::class)->name('show');
    });

require 'auth.php';
