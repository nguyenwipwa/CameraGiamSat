<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\Repository\ProductRepository','App\Repository\ProductRepositoryImp');
        $this->app->bind('App\Repository\OrderRepository','App\Repository\OrderRepositoryImp');
        $this->app->bind('App\Repository\AdminRepository','App\Repository\AdminRepositoryImp');
    }
}
