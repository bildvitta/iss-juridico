<?php

namespace Bildvitta\IssJuridico\Resources\Programmatic\Documents;

use Bildvitta\IssJuridico\IssJuridico;

class Documents
{
    private IssJuridico $juridico;
    

    public function __construct(IssJuridico $juridico)
    {
        $this->juridico = $juridico;
    }

    public function send($data)
    {
        return $this->juridico->request->post(
            '/programmatic/documents/send',
            $data
        )->object();
    }

    public function view($data)
    {
        return $this->juridico->request->post(
            '/programmatic/documents/view',
            $data
        )->object();
    }

    public function store($data)
    {
        return $this->juridico->request->post(
            '/programmatic/documents/',
            $data
        )->object();
    }   

    public function put($uuidDocument, $data)
    {
        return $this->juridico->request->put(
            sprintf('/programmatic/documents/%s', $uuidDocument),
            $data
        )->object();
    }   
}
