<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withProviders([
        \Illuminate\Filesystem\FilesystemServiceProvider::class,
        \Illuminate\View\ViewServiceProvider::class,
        \Illuminate\Session\SessionServiceProvider::class,
        \Illuminate\Cache\CacheServiceProvider::class,
        \Illuminate\Database\DatabaseServiceProvider::class,
        \Illuminate\Encryption\EncryptionServiceProvider::class,
        \Illuminate\Auth\AuthServiceProvider::class,
        \Illuminate\Validation\ValidationServiceProvider::class,
        \Illuminate\Cookie\CookieServiceProvider::class,
        \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
    ])
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

/**
 * Set the storage path for Vercel's read-only filesystem.
 * We use /tmp because it is the only writable directory on Vercel.
 */
if (env('APP_ENV') === 'production') {
    $app->useStoragePath('/tmp');
}

return $app;
