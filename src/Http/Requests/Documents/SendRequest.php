<?php

namespace Bildvitta\IssJuridico\Http\Requests\Documents;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
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
