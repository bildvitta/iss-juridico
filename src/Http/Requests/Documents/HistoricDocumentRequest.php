<?php

namespace BildVitta\IssJuridico\Http\Requests\Documents;

use Illuminate\Foundation\Http\FormRequest;

class HistoricDocumentRequest extends FormRequest
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

    public function attributes(): array
    {
        return [
           //
        ];
    }
}
