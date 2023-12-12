<?php

namespace Bildvitta\IssJuridico\Http\Controllers\Documents;

use Bildvitta\IssJuridico\Http\Requests\Documents\DownloadRequest;
use Illuminate\Http\JsonResponse;

class DownloadController extends DocumentController
{
    public function __invoke(DownloadRequest $request, $document): JsonResponse
    {
        return response()->json(
            [
                'redirect' => app('juridico')->documents()->download($document)
            ]
        );
    }
}
