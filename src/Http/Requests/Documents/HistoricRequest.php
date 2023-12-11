<?php

namespace BildVitta\IssJuridico\Http\Requests\Documents;

use App\Models\Settings\DocumentType;
use App\Rules\CheckExists;
use Illuminate\Foundation\Http\FormRequest;

class HistoricRequest extends FormRequest
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
