@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.tipvojske.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tipvojskes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.tipvojske.fields.id') }}
                        </th>
                        <td>
                            {{ $tipvojske->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tipvojske.fields.naziv_tipvojske') }}
                        </th>
                        <td>
                            {{ $tipvojske->naziv_tipvojske }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tipvojske.fields.vrstaoruzja') }}
                        </th>
                        <td>
                            @foreach($tipvojske->vrstaoruzjas as $key => $vrstaoruzja)
                                <span class="label label-info">{{ $vrstaoruzja->naziv_oruzja }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tipvojskes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection