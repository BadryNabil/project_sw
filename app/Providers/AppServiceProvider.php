<?php

namespace App\Providers;
use Schema;
use App\Setting;
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
        Schema::defaultStringLength(191);
        $settings = Setting::first();
        view()->share(compact('settings'));

        
    }
}
