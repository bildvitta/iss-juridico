<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use Illuminate\Http\JsonResponse;

class ViewController extends DocumentController
{
    public function __invoke(ViewController $request): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->view($request)
            ]
        );
    }
}
