<?php

namespace DevIT\Hasoffers\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

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