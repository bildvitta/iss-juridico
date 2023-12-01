<?php

namespace BildVitta\IssJuridico\Http\Controllers\Documents;

use BildVitta\IssJuridico\Http\Requests\IndexRequest;
use Illuminate\Http\JsonResponse;

class IndexController extends DocumentController
{
    public function __invoke(IndexRequest $request): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents->send($request)
            ]
        );
    }
}
