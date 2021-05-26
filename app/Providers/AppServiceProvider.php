<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Paginator::useBootstrap();


        $menu = [
            [
                'title' => 'news',
                'route' => 'news::category'
            ],
            [
                'title' => 'admin',
                'route' => 'admin::news::index',
            ],
            [
                'title' => 'en',
                'route' =>'lang::en',
            ],
            [
                'title' => 'ru',
                'route' => 'lang::ru',
            ],
        ];

        View::share('menu', $menu);
    }
}
