<?php

namespace App\Http\Requests;

use App\Models\Rodvojske;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRodvojskeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('rodvojske_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:rodvojskes,id',
        ];
    }
}
