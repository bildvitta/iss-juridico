<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\HistoricRequest;
use Illuminate\Http\JsonResponse;

class HistoricController extends DocumentController
{
    public function __invoke(HistoricRequest $request): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->historic($request)
            ]
        );
    }
}
