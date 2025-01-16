<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadAdminRoutes();
    }

    protected function loadAdminRoutes(): void
    {
        if (file_exists($path = base_path('routes/admin.php'))) {
            Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->namespace($this->namespace)
                ->group($path);
        }
    }
}
