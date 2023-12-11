<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\Documents\ViewRequest;
use Illuminate\Http\JsonResponse;

class ViewController extends DocumentController
{
    public function __invoke(ViewRequest $request): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->view($request)
            ]
        );
    }
}
