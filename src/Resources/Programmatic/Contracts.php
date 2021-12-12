<?php

namespace Bildvitta\IssJuridico\Resources\Programmatic;

use Bildvitta\IssJuridico\Contracts\Resources\Programmatic\ContractContract;
use Bildvitta\IssJuridico\IssJuridico;

class Contracts implements ContractContract
{
    private IssJuridico $juridico;

    public function __construct(IssJuridico $juridico)
    {
        $this->juridico = $juridico;
    }

    public function search(array $query = []): object
    {
        return $this->juridico->request->get(self::ENDPOINT_PREFIX, $query)->throw()->object();
    }

    public function find(string $uuid): object
    {
        return $this->crm->request->get(vsprintf(self::ENDPOINT_FIND_BY_UUID, [$uuid]))->throw()->object();
    }
}
