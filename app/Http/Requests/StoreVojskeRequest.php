<?php

namespace App\Http\Requests;

use App\Models\Vojske;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVojskeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vojske_create');
    }

    public function rules()
    {
        return [
            'vojska' => [
                'string',
                'nullable',
            ],
            'tip_vojskes.*' => [
                'integer',
            ],
            'tip_vojskes' => [
                'array',
            ],
        ];
    }
}
