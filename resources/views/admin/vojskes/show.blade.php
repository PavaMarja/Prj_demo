@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vojske.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vojskes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vojske.fields.id') }}
                        </th>
                        <td>
                            {{ $vojske->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vojske.fields.vojska') }}
                        </th>
                        <td>
                            {{ $vojske->vojska }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vojske.fields.tip_vojske') }}
                        </th>
                        <td>
                            @foreach($vojske->tip_vojskes as $key => $tip_vojske)
                                <span class="label label-info">{{ $tip_vojske->naziv_tipvojske }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vojskes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection