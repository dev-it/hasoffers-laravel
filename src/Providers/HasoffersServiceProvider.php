<?php

namespace DevIT\Hasoffers\Laravel\Providers;

use DevIT\Hasoffers\Laravel\Client;
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
        $this->publishes([
            __DIR__ . '/../../config/hasoffers.php' => config_path('hasoffers.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client(config('hasoffers.key'), config('hasoffers.network_id'));
        });

        $this->app->alias(Client::class, 'hasoffers');
    }
}
