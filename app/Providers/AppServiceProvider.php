<?php

namespace App\Providers;

use App\Repositories\StoreEloquentORM;
use App\Repositories\StoreRepositoryInterface;
use App\Repositories\UserEloquentORM;
use App\Repositories\UserRepositoryInterface;
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
        $this->app->bind(
            StoreRepositoryInterface::class, 
            StoreEloquentORM::class
        );

        $this->app->bind(
            UserRepositoryInterface::class, 
            UserEloquentORM::class
        );
    }
}
