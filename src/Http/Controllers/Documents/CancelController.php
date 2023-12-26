<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\CancelRequest;
use Illuminate\Http\JsonResponse;

class CancelController extends DocumentController
{
    public function __invoke(CancelRequest $request, $document): JsonResponse
    {
        $response = app('juridico')->documents()->cancel($request, $document);
        
        return response()->json(
            $response, $response->status->code
        );
    }
}
