<?php

namespace Bildvitta\IssJuridico\Resources\Programmatic;

use Bildvitta\IssJuridico\IssJuridico;
use Bildvitta\IssJuridico\Resources\Programmatic\Documents\Documents;
use Bildvitta\IssJuridico\Resources\Programmatic\Historics\Historics;
use Bildvitta\IssJuridico\Resources\Programmatic\SignerDocuments\SignerDocuments;
use Bildvitta\IssJuridico\Resources\Programmatic\ViewDocuments\ViewDocuments;

class Programmatic
{
    /**
     * @var IssJuridico
     */
    private IssJuridico $juridico;

    /**
     * Customers constructor.
     *
     * @param IssJuridico $juridico
     */
    public function __construct(IssJuridico $juridico)
    {
        $this->juridico = $juridico;
    }

    public function documents(): Documents
    {
        return new Documents($this->juridico);
    }

    public function historics(): Historics
    {
        return new Historics($this->juridico);
    }

    public function signerDocuments(): SignerDocuments
    {
        return new SignerDocuments($this->juridico);
    }

    public function viewDocuments(): ViewDocuments
    {
        return new ViewDocuments($this->juridico);
    }
}
