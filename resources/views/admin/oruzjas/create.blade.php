@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.oruzja.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.oruzjas.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="naziv_oruzja">{{ trans('cruds.oruzja.fields.naziv_oruzja') }}</label>
                <input class="form-control {{ $errors->has('naziv_oruzja') ? 'is-invalid' : '' }}" type="text" name="naziv_oruzja" id="naziv_oruzja" value="{{ old('naziv_oruzja', '') }}">
                @if($errors->has('naziv_oruzja'))
                    <span class="text-danger">{{ $errors->first('naziv_oruzja') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.oruzja.fields.naziv_oruzja_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="koef">{{ trans('cruds.oruzja.fields.koef') }}</label>
                <input class="form-control {{ $errors->has('koef') ? 'is-invalid' : '' }}" type="number" name="koef" id="koef" value="{{ old('koef', '1') }}" step="1">
                @if($errors->has('koef'))
                    <span class="text-danger">{{ $errors->first('koef') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.oruzja.fields.koef_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection