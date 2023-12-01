<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\HistoricDocumentRequest;
use Illuminate\Http\JsonResponse;

class HistoricDocumentController extends DocumentController
{
    public function __invoke(HistoricDocumentRequest $request, $document): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->historicDocument($request, $document)
            ]
        );
    }
}
