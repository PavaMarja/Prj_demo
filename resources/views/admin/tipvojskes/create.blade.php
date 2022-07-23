@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.tipvojske.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tipvojskes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="naziv_tipvojske">{{ trans('cruds.tipvojske.fields.naziv_tipvojske') }}</label>
                <input class="form-control {{ $errors->has('naziv_tipvojske') ? 'is-invalid' : '' }}" type="text" name="naziv_tipvojske" id="naziv_tipvojske" value="{{ old('naziv_tipvojske', '') }}">
                @if($errors->has('naziv_tipvojske'))
                    <span class="text-danger">{{ $errors->first('naziv_tipvojske') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tipvojske.fields.naziv_tipvojske_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vrstaoruzjas">{{ trans('cruds.tipvojske.fields.vrstaoruzja') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('vrstaoruzjas') ? 'is-invalid' : '' }}" name="vrstaoruzjas[]" id="vrstaoruzjas" multiple>
                    @foreach($vrstaoruzjas as $id => $vrstaoruzja)
                        <option value="{{ $id }}" {{ in_array($id, old('vrstaoruzjas', [])) ? 'selected' : '' }}>{{ $vrstaoruzja }}</option>
                    @endforeach
                </select>
                @if($errors->has('vrstaoruzjas'))
                    <span class="text-danger">{{ $errors->first('vrstaoruzjas') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tipvojske.fields.vrstaoruzja_helper') }}</span>
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