<?php


namespace App\Http\Controllers;


class LangController extends Controller
{

    public function ruLocale()
    {
        //\App\Providers\AppServiceProvider $provider
        //$provider->boot('ru');
        //\App::setLocale('ru');
        //return redirect('/');
    }

    public function enLocale(\App\Providers\AppServiceProvider $provider)
    {
        $provider->boot('en');
    }
}
