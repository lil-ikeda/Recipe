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
        // Schema::defaultStringLength(191);
        if (\App::environment('production')) {
            \URL::forceShema('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            //if local register your services you require for development
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        }else{
            //else register your services you require for production
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
