<?php

namespace App\Http\Requests;

use App\Models\Tipvojske;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTipvojskeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tipvojske_create');
    }

    public function rules()
    {
        return [
            'vrstaoruzjas.*' => [
                'integer',
            ],
            'vrstaoruzjas' => [
                'array',
            ],
            'kol' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'koefuboj' => [
                'numeric',
            ],
        ];
    }
}
