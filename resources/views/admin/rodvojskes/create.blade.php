@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.rodvojske.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rodvojskes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="rodvojske">{{ trans('cruds.rodvojske.fields.rodvojske') }}</label>
                <input class="form-control {{ $errors->has('rodvojske') ? 'is-invalid' : '' }}" type="text" name="rodvojske" id="rodvojske" value="{{ old('rodvojske', '') }}">
                @if($errors->has('rodvojske'))
                    <span class="text-danger">{{ $errors->first('rodvojske') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.rodvojske.fields.rodvojske_helper') }}</span>
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