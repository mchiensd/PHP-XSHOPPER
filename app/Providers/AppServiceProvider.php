<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\chude;

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

        view()->composer('header',function($view){
                $chude=chude::all();
                $view->with('chude',$chude);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
