<?php

namespace BildVitta\IssJuridico\Http\Requests;

use Http\Discovery\Exception\NotFoundException;
use Illuminate\Foundation\Http\FormRequest;

class CancelRequest extends FormRequest
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
