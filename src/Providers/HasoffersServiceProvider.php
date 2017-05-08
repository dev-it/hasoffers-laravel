<?php

namespace DevIT\Hasoffers\Laravel\Providers;

use Illuminate\Support\ServiceProvider;

class HasoffersServiceProvider extends ServiceProvider
{

    /**
     * Register
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('Hasoffers\Client', function ($app) {
            return new DevIT\HasOffers\Laravel\Client(config('services.hasoffers.key'), config('services.hasoffers.network_id'));
        });
    }
}
