<?php

namespace Bildvitta\IssJuridico\Contracts\Resources\Programmatic;

interface ContractContract
{
    public const ENDPOINT_PREFIX = '/programmatic/contracts';
    public const ENDPOINT_FIND_BY_UUID = self::ENDPOINT_PREFIX.'/%s';

    public function search(array $query = []): object;
    public function find(string $uuid): object;
}
