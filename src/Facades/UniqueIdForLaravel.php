<?php

namespace UniqueIdForLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see UniqueIdForLaravel
 */
class UniqueIdForLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \StringKeyForLaravel\UniqueIdForLaravel::class;
    }
}
