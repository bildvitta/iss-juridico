<?php

namespace BildVitta\IssJuridico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifySignatureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}