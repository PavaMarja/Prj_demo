<?php

namespace App\Http\Requests;

use App\Models\Rodvojske;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRodvojskeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('rodvojske_edit');
    }

    public function rules()
    {
        return [
            'rodvojske' => [
                'string',
                'nullable',
            ],
        ];
    }
}
