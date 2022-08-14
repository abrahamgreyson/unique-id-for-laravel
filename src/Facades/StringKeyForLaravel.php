<?php

namespace StringKeyForLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see StringKeyForLaravel
 */
class StringKeyForLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \StringKeyForLaravel\StringKeyForLaravel::class;
    }
}
