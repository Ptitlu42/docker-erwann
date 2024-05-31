<?php

namespace App\Providers;

use App\Policies\TodoPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('show-todo', [TodoPolicy::class, 'view']);
        Gate::define('update-todo', [TodoPolicy::class, 'update']);
    }
}
