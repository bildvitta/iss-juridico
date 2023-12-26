<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\ViewRequest;
use Illuminate\Http\JsonResponse;

class ViewController extends DocumentController
{
    public function __invoke(ViewRequest $request): JsonResponse
    {
        $response = app('juridico')->documents()->view($request);
        
        return response()->json(
            $response, $response->status->code
        );
    }
}
