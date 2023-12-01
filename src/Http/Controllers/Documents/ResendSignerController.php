<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\ResendSignerRequest;
use Illuminate\Http\JsonResponse;

class ResendSignerController extends DocumentController
{
    public function __invoke(ResendSignerRequest $request, $document, $signerDocument): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->resendSigner($document, $signerDocument)
            ]
        );
    }
}
