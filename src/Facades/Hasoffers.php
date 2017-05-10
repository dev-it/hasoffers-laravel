<?php

namespace Mollie\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * (Facade) Class Mollie.
 *
 * @method static MollieApiWrapper api()
 */
class Hasoffers extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hasoffers';
    }
}