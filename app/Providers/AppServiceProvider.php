<?php

namespace App\Providers;

use App\Repositories\StoreEloquentORM;
use App\Repositories\StoreRepositoryInterface;
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
    }
}
