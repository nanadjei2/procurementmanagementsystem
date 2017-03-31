<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User as User;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.side-nav', function ($view) {
            $user = array_merge(['user' => Auth::User()->id]); // You can append *,$view->getData()* after *Auth::User()->id*
            $view->with($user);
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
