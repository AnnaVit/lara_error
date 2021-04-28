<?php

namespace App\Providers;

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
        $menu = [
            [
                'title' => 'Новости',
                'route' => 'news::category'
            ],
            [
                'title' => 'Админка',
                'route' => 'admin::news::index',
            ],
        ];

        View::share('menu', $menu);
    }

}
