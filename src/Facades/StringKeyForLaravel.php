<?php

namespace StringKeyForLaravel\StringKeyForLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \StringKeyForLaravel\StringKeyForLaravel\StringKeyForLaravel
 */
class StringKeyForLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \StringKeyForLaravel\StringKeyForLaravel\StringKeyForLaravel::class;
    }
}
