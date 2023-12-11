<?php

namespace BildVitta\IssJuridico\Http\Requests\Documents;

use Illuminate\Foundation\Http\FormRequest;

class ResendSignerRequest extends FormRequest
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
