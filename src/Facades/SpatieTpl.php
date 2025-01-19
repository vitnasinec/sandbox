<?php

namespace VitNasinec\SpatieTpl\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VitNasinec\SpatieTpl\SpatieTpl
 */
class SpatieTpl extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VitNasinec\SpatieTpl\SpatieTpl::class;
    }
}
