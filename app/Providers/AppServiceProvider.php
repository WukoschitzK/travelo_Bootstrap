<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //add this
        Schema::defaultStringLength(191);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        //
        if ($this->app->environment("production")) {
            URL::forceScheme("https");
        }
    }
}
