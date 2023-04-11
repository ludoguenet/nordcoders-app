<?php

declare(strict_types=1);

use App\Http\Controllers\Contact\IndexController as IndexContactController;
use App\Http\Controllers\Contact\StoreController as StoreContactController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Posts\IndexController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

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

Route::prefix('contact')
    ->as('contact.')
    ->group(static function (): void {
        Route::get('/', IndexContactController::class)->name('index');
        Route::post('store', StoreContactController::class)->name('store');
    });

require 'auth.php';
