<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;

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
        $middleware->append(LogMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

