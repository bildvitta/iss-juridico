<?php

namespace Bildvitta\IssJuridico\Resources\Programmatic;

use Bildvitta\IssJuridico\IssJuridico;

class Programmatic
{
    public function __construct(private IssJuridico $issJuridico)
    {
    }

    /**
     * @return Contracts
     */
    public function contracts(): Contracts
    {
        return new Contracts($this->issJuridico);
    }
}
