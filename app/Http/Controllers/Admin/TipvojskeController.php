<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTipvojskeRequest;
use App\Http\Requests\StoreTipvojskeRequest;
use App\Http\Requests\UpdateTipvojskeRequest;
use App\Models\Oruzja;
use App\Models\Rodvojske;
use App\Models\Tipvojske;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TipvojskeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tipvojske_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipvojskes = Tipvojske::with(['rodvojske', 'vrstaoruzjas'])->get();

        return view('admin.tipvojskes.index', compact('tipvojskes'));
    }

    public function create()
    {
        abort_if(Gate::denies('tipvojske_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rodvojskes = Rodvojske::pluck('rodvojske', 'id')->prepend(trans('global.pleaseSelect'), '');

        $vrstaoruzjas = Oruzja::pluck('naziv_oruzja', 'id');

        return view('admin.tipvojskes.create', compact('rodvojskes', 'vrstaoruzjas'));
    }

    public function store(StoreTipvojskeRequest $request)
    {
        $tipvojske = Tipvojske::create($request->all());
        $tipvojske->vrstaoruzjas()->sync($request->input('vrstaoruzjas', []));

        return redirect()->route('admin.tipvojskes.index');
    }

    public function edit(Tipvojske $tipvojske)
    {
        abort_if(Gate::denies('tipvojske_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rodvojskes = Rodvojske::pluck('rodvojske', 'id')->prepend(trans('global.pleaseSelect'), '');

        $vrstaoruzjas = Oruzja::pluck('naziv_oruzja', 'id');

        $tipvojske->load('rodvojske', 'vrstaoruzjas');

        return view('admin.tipvojskes.edit', compact('rodvojskes', 'tipvojske', 'vrstaoruzjas'));
    }

    public function update(UpdateTipvojskeRequest $request, Tipvojske $tipvojske)
    {
        $tipvojske->update($request->all());
        $tipvojske->vrstaoruzjas()->sync($request->input('vrstaoruzjas', []));

        return redirect()->route('admin.tipvojskes.index');
    }

    public function show(Tipvojske $tipvojske)
    {
        abort_if(Gate::denies('tipvojske_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipvojske->load('rodvojske', 'vrstaoruzjas');

        return view('admin.tipvojskes.show', compact('tipvojske'));
    }

    public function destroy(Tipvojske $tipvojske)
    {
        abort_if(Gate::denies('tipvojske_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipvojske->delete();

        return back();
    }

    public function massDestroy(MassDestroyTipvojskeRequest $request)
    {
        Tipvojske::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
