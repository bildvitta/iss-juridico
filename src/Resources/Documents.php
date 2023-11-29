<?php

namespace Bildvitta\IssJuridico\Resources;

use Bildvitta\IssJuridico\IssJuridico;

class Documents
{
    private IssJuridico $juridico;
    

    public function __construct(IssJuridico $juridico)
    {
        $this->juridico = $juridico;
    }

    public function list($data)
    {
        return $this->juridico->request->get(
            'documents',
            $data
        )->throw()->object();
    }

    public function send($data)
    {
        return $this->juridico->request->post(
            'documents/send',
            $data
        )->throw()->object();
    }

    public function view($data)
    {
        return $this->juridico->request->post(
            'documents/view',
            $data
        )->throw()->object();
    }

    public function historic($data)
    {
        return $this->juridico->request->get(
            sprintf('documents/historic'),
            $data
        )->throw()->object();
    }

    public function historicDocument($uuidDocument,$data)
    {
        return $this->juridico->request->get(
            sprintf('documents/%s/historic', $uuidDocument),
            $data
        )->throw()->object();
    }

    public function download($uuidDocument)
    {
        return $this->juridico->request->get(
            sprintf('documents/%s/download', $uuidDocument),
        )->throw()->object();
    }
    
    public function verifySignatures($uuidDocument)
    {
        return $this->juridico->request->get(
            sprintf('documents/%s/verify-signatures', $uuidDocument),
        )->throw()->object();
    }
    
    public function cancel($uuidDocument,$data)
    {
        return $this->juridico->request->get(
            sprintf('documents/%s/cancel', $uuidDocument),
            $data
        )->throw()->object();
    }

    public function resendSigner($uuidDocument, $uuidSigner)
    {
        return $this->juridico->request->get(
            sprintf('documents/%s/resend-signer/%s', $uuidDocument, $uuidSigner)
        )->throw()->object();
    }

    public function changeSigner($uuidDocument, $uuidSigner,$data)
    {
        return $this->juridico->request->get(
            sprintf('documents/%s/change-signer/%s', $uuidDocument, $uuidSigner),
            $data
        )->throw()->object();
    }
    
}
