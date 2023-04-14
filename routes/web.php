<?php

declare(strict_types=1);

use App\Http\Controllers\Contact\IndexController as IndexContactController;
use App\Http\Controllers\Contact\StoreController as StoreContactController;
use App\Http\Controllers\Dashboard\IndexController as IndexDashboardController;
use App\Http\Controllers\Dashboard\Post\CreateController;
use App\Http\Controllers\Dashboard\Post\DestroyController;
use App\Http\Controllers\Dashboard\Post\EditController;
use App\Http\Controllers\Dashboard\Post\IndexController as IndexDashboardPostController;
use App\Http\Controllers\Dashboard\Post\StoreController;
use App\Http\Controllers\Dashboard\Post\UpdateController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageController::class)->name('homepage');

Route::middleware(['auth', 'web'])->group(static function (): void {
    Route::prefix('dashboard')
        ->as('dashboard.')
        ->group(static function (): void {
            Route::get('/', IndexDashboardController::class)->name('index');

            Route::prefix('posts')
                ->as('posts.')
                ->group(static function (): void {
                    Route::get('/', IndexDashboardPostController::class)->name('index');
                    Route::get('/create', CreateController::class)->name('create');
                    Route::post('/store', StoreController::class)->name('store');
                    Route::get('/edit/{post}', EditController::class)->name('edit');
                    Route::put('/{post}', UpdateController::class)->name('update');
                    Route::delete('/{post}', DestroyController::class)->name('destroy');
                });
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
