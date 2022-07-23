@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.rodvojske.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rodvojskes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.rodvojske.fields.id') }}
                        </th>
                        <td>
                            {{ $rodvojske->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.rodvojske.fields.rodvojske') }}
                        </th>
                        <td>
                            {{ $rodvojske->rodvojske }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rodvojskes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#rodvojske_tipvojskes" role="tab" data-toggle="tab">
                {{ trans('cruds.tipvojske.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="rodvojske_tipvojskes">
            @includeIf('admin.rodvojskes.relationships.rodvojskeTipvojskes', ['tipvojskes' => $rodvojske->rodvojskeTipvojskes])
        </div>
    </div>
</div>

@endsection