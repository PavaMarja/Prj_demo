<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRodvojskeRequest;
use App\Http\Requests\StoreRodvojskeRequest;
use App\Http\Requests\UpdateRodvojskeRequest;
use App\Models\Rodvojske;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RodvojskeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('rodvojske_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rodvojskes = Rodvojske::all();

        return view('admin.rodvojskes.index', compact('rodvojskes'));
    }

    public function create()
    {
        abort_if(Gate::denies('rodvojske_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rodvojskes.create');
    }

    public function store(StoreRodvojskeRequest $request)
    {
        $rodvojske = Rodvojske::create($request->all());

        return redirect()->route('admin.rodvojskes.index');
    }

    public function edit(Rodvojske $rodvojske)
    {
        abort_if(Gate::denies('rodvojske_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rodvojskes.edit', compact('rodvojske'));
    }

    public function update(UpdateRodvojskeRequest $request, Rodvojske $rodvojske)
    {
        $rodvojske->update($request->all());

        return redirect()->route('admin.rodvojskes.index');
    }

    public function show(Rodvojske $rodvojske)
    {
        abort_if(Gate::denies('rodvojske_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rodvojske->load('rodvojskeTipvojskes');

        return view('admin.rodvojskes.show', compact('rodvojske'));
    }

    public function destroy(Rodvojske $rodvojske)
    {
        abort_if(Gate::denies('rodvojske_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rodvojske->delete();

        return back();
    }

    public function massDestroy(MassDestroyRodvojskeRequest $request)
    {
        Rodvojske::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
