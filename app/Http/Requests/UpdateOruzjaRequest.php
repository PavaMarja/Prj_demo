<?php

namespace App\Http\Requests;

use App\Models\Oruzja;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOruzjaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('oruzja_edit');
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
            'kol' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
