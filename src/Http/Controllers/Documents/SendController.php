<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\SendRequest;
use Illuminate\Http\JsonResponse;

class SendController extends DocumentController
{
    public function __invoke(SendRequest $request): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents()->send($request)
            ]
        );
    }
}
