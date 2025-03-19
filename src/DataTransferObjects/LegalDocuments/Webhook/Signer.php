<?php

namespace Bildvitta\IssJuridico\DataTransferObjects\LegalDocuments\Webhook;

class Signer
{
    public ?string $name;

    public string $email;

    public ?bool $signed;

    public ?string $signed_at;

    public ?bool $internal_signer;

    public ?string $type;

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'];
        $this->signed = $data['signed'] ?? null;
        $this->signed_at = $data['signed_at'] ?? null;
        $this->internal_signer = $data['internal_signer'] ?? null;
        $this->type = $data['type'] ?? null;
    }
}
