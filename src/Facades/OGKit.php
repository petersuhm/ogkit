<?php

namespace OGKit\OGKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OGKit\OGKit\OGKit
 */
class OGKit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \OGKit\OGKit\OGKit::class;
    }
}
