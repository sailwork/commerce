<?php

namespace Sailwork\Commerce;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sailwork\Commerce\Commerce
 */
class CommerceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'commerce';
    }
}
