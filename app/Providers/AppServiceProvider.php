<?php

namespace App\Providers;

use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
      $getAnalyticInfo = new clientController();
      View::share($getAnalyticInfo->AdminAnalytics());
    }
}
