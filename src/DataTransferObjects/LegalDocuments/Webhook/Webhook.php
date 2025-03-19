<?php

namespace Bildvitta\IssJuridico\DataTransferObjects\LegalDocuments\Webhook;

class Webhook
{
    public string $uuid_legal;

    public string $external_id;

    public ?string $action;

    public ?string $document_type_slug;

    public ?bool $is_legal_validation;

    public string $type;

    public ?string $message;

    /**
     * @var null|array<int, Signer>
     */
    public ?array $signers;

    public function __construct(array $data)
    {
        $this->uuid_legal = $data['uuid_legal'];
        $this->external_id = $data['external_id'];
        $this->action = $data['action'] ?? null;
        $this->document_type_slug = $data['document_type_slug'] ?? null;
        $this->is_legal_validation = $data['is_legal_validation'] ?? null;
        $this->type = $data['type'];
        $this->message = $data['message'] ?? null;
        $this->signers = null;
        if (isset($data['signers'])) {
            $this->signers = [];
            foreach ($data['signers'] as $signer) {
                $this->signers[] = new Signer($signer);
            }
        }
    }
}
