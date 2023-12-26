<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\VerifySignatureRequest;
use Illuminate\Http\JsonResponse;

class VerifySignatureController extends DocumentController
{
    public function __invoke(VerifySignatureRequest $request, $document): JsonResponse
    {
        return response()->json(
            app('juridico')->documents()->verifySignatures($document)
        );
    }
}
