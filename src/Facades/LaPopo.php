<?php

namespace JorgeMurta\LaPopo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JorgeMurta\LaPopo\LaPopo
 */
class LaPopo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lapopo';
    }
}
