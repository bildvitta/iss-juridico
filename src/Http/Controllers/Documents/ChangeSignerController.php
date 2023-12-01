<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\ChangeSignerRequest;
use Illuminate\Http\JsonResponse;

class ChangeSignerController extends DocumentController
{
    public function __invoke(ChangeSignerRequest $request, $document, $signerDocument): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->changeSigner($request, $document, $signerDocument)
            ]
        );
    }
}
