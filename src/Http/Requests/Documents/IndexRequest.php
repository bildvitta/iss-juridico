<?php

namespace BildVitta\IssJuridico\Http\Requests\Documents;

use App\Models\Settings\DocumentType;
use App\Rules\CheckExists;
use App\Rules\Settings\DocumentTypes\CheckSlug;
use Http\Discovery\Exception\NotFoundException;
use Illuminate\Foundation\Http\FormRequest;
use Log;

class IndexRequest extends FormRequest
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
