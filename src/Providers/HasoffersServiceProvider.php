<?php

namespace DevIT\Hasoffers\Laravel\Providers;

use DevIT\HasOffers\Laravel\Client;
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
        $this->app->singleton('hasoffers', function ($app) {
            return new Client(config('services.hasoffers.key'), config('services.hasoffers.network_id'));
        });
    }
}
