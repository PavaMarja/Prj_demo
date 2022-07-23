<?php

namespace App\Http\Requests;

use App\Models\Vojske;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVojskeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vojske_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:vojskes,id',
        ];
    }
}
