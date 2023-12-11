<?php

namespace BildVitta\IssJuridico\Http\Requests\Documents;

use App\Models\Document;
use App\Models\Products\Product;
use App\Models\Settings\DocumentType;
use App\Models\Template;
use App\Rules\CheckExists;
use App\Rules\Settings\Products\CheckInitialSettings;
use Illuminate\Foundation\Http\FormRequest;

class ViewRequest extends FormRequest
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
