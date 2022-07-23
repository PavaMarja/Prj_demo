<?php

namespace App\Http\Requests;

use App\Models\Oruzja;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOruzjaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('oruzja_create');
    }

    public function rules()
    {
        return [
            'naziv_oruzja' => [
                'string',
                'nullable',
            ],
            'koef' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
