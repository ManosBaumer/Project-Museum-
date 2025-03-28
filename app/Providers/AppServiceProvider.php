<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('index-tour', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('index-exhibit', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('index-user', function (User $user) {
            return $user->is_admin;
        });
    }
}
