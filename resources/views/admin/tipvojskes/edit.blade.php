@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.tipvojske.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tipvojskes.update", [$tipvojske->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="rodvojske_id">{{ trans('cruds.tipvojske.fields.rodvojske') }}</label>
                <select class="form-control select2 {{ $errors->has('rodvojske') ? 'is-invalid' : '' }}" name="rodvojske_id" id="rodvojske_id">
                    @foreach($rodvojskes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('rodvojske_id') ? old('rodvojske_id') : $tipvojske->rodvojske->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('rodvojske'))
                    <span class="text-danger">{{ $errors->first('rodvojske') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tipvojske.fields.rodvojske_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vrstaoruzjas">{{ trans('cruds.tipvojske.fields.vrstaoruzja') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('vrstaoruzjas') ? 'is-invalid' : '' }}" name="vrstaoruzjas[]" id="vrstaoruzjas" multiple>
                    @foreach($vrstaoruzjas as $id => $vrstaoruzja)
                        <option value="{{ $id }}" {{ (in_array($id, old('vrstaoruzjas', [])) || $tipvojske->vrstaoruzjas->contains($id)) ? 'selected' : '' }}>{{ $vrstaoruzja }}</option>
                    @endforeach
                </select>
                @if($errors->has('vrstaoruzjas'))
                    <span class="text-danger">{{ $errors->first('vrstaoruzjas') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tipvojske.fields.vrstaoruzja_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="kol">{{ trans('cruds.tipvojske.fields.kol') }}</label>
                <input class="form-control {{ $errors->has('kol') ? 'is-invalid' : '' }}" type="number" name="kol" id="kol" value="{{ old('kol', $tipvojske->kol) }}" step="1">
                @if($errors->has('kol'))
                    <span class="text-danger">{{ $errors->first('kol') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tipvojske.fields.kol_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="koefuboj">{{ trans('cruds.tipvojske.fields.koefuboj') }}</label>
                <input class="form-control {{ $errors->has('koefuboj') ? 'is-invalid' : '' }}" type="number" name="koefuboj" id="koefuboj" value="{{ old('koefuboj', $tipvojske->koefuboj) }}" step="0.01">
                @if($errors->has('koefuboj'))
                    <span class="text-danger">{{ $errors->first('koefuboj') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tipvojske.fields.koefuboj_helper') }}</span>
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