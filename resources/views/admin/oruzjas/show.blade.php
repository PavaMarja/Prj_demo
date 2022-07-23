@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.oruzja.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.oruzjas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.oruzja.fields.id') }}
                        </th>
                        <td>
                            {{ $oruzja->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.oruzja.fields.naziv_oruzja') }}
                        </th>
                        <td>
                            {{ $oruzja->naziv_oruzja }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.oruzja.fields.koef') }}
                        </th>
                        <td>
                            {{ $oruzja->koef }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.oruzjas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection