<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use Illuminate\Http\JsonResponse;

class SendController extends DocumentController
{
    public function __invoke(SendController $request): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->send($request)
            ]
        );
    }
}
