<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\ResendSignerRequest;
use Illuminate\Http\JsonResponse;

class ResendSignerController extends DocumentController
{
    public function __invoke(ResendSignerRequest $request, $document, $signerDocument): JsonResponse
    {
        return response()->json(
            app('juridico')->documents()->resendSigner($document, $signerDocument)
        );
    }
}
