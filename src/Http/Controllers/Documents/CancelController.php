<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\CancelRequest;
use Illuminate\Http\JsonResponse;

class CancelController extends DocumentController
{
    public function __invoke(CancelRequest $request, $document): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->cancel($request, $document)
            ]
        );
    }
}
