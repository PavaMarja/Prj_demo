<?php

namespace App\Http\Requests;

use App\Models\Tipvojske;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTipvojskeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tipvojske_edit');
    }

    public function rules()
    {
        return [
            'naziv_tipvojske' => [
                'string',
                'nullable',
            ],
            'vrstaoruzjas.*' => [
                'integer',
            ],
            'vrstaoruzjas' => [
                'array',
            ],
        ];
    }
}
