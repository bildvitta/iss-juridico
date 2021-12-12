<?php

namespace Bildvitta\IssJuridico\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bildvitta\IssJuridico\IssJuridico
 */
class IssJuridico extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iss-juridico';
    }
}
