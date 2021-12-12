<?php

namespace Bildvitta\IssJuridico\Contracts\Resources;

interface ContractContract
{
    public const ENDPOINT_PREFIX = '/contracts';
    public const ENDPOINT_FIND_BY_UUID = self::ENDPOINT_PREFIX.'/%s';

    public function search(array $query = []): object;

    public function find(string $uuid): object;

    public function create(array $body = []): object;
}
