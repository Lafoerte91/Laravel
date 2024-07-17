<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        using: function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/main.php'))
                ->group(base_path('routes/user.php'))
                ->group(base_path('routes/admin.php'))
                ->group(base_path('routes/api.php'));
    },
)
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'log' => App\Http\Middleware\LogMiddleware::class,
            'guest' => Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,
            'auth' => Illuminate\Auth\Middleware\Authenticate::class,
            'active' => App\Http\Middleware\ActiveMiddleware::class,
            'admin' => App\Http\Middleware\AdminMiddleware::class,
            'token' => App\Http\Middleware\TokenMiddleware::class,
            'throttle' => Illuminate\Routing\Middleware\ThrottleRequests::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

