<?php

namespace App\Providers;
use App;
use Illuminate\Support\ServiceProvider;

class facadestestserviceprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        App::bind('test',function(){
            return new App\Test\testfacades;
        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
