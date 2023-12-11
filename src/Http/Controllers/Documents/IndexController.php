<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\IndexRequest;
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
