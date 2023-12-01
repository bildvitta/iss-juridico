<?php

namespace BildVitta\IssJuridico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeSignerRequest extends FormRequest
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
