<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\Documents\VerifySignatureRequest;
use Illuminate\Http\JsonResponse;

class VerifySignatureController extends DocumentController
{
    public function __invoke(VerifySignatureRequest $request, $document): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->verifySignatures($document)
            ]
        );
    }
}
