<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\ViewRequest;
use Illuminate\Http\JsonResponse;

class ViewController extends DocumentController
{
    public function __invoke(ViewRequest $request): JsonResponse
    {
        return response()->json(
            app('juridico')->documents()->view($request)
        );
    }
}
