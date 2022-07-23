<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVojskeRequest;
use App\Http\Requests\StoreVojskeRequest;
use App\Http\Requests\UpdateVojskeRequest;
use App\Models\Tipvojske;
use App\Models\Vojske;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VojskeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('vojske_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vojskes = Vojske::with(['tip_vojskes'])->get();

        return view('admin.vojskes.index', compact('vojskes'));
    }

    public function create()
    {
        abort_if(Gate::denies('vojske_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tip_vojskes = Tipvojske::pluck('naziv_tipvojske', 'id');

        return view('admin.vojskes.create', compact('tip_vojskes'));
    }

    public function store(StoreVojskeRequest $request)
    {
        $vojske = Vojske::create($request->all());
        $vojske->tip_vojskes()->sync($request->input('tip_vojskes', []));

        return redirect()->route('admin.vojskes.index');
    }

    public function edit(Vojske $vojske)
    {
        abort_if(Gate::denies('vojske_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tip_vojskes = Tipvojske::pluck('naziv_tipvojske', 'id');

        $vojske->load('tip_vojskes');

        return view('admin.vojskes.edit', compact('tip_vojskes', 'vojske'));
    }

    public function update(UpdateVojskeRequest $request, Vojske $vojske)
    {
        $vojske->update($request->all());
        $vojske->tip_vojskes()->sync($request->input('tip_vojskes', []));

        return redirect()->route('admin.vojskes.index');
    }

    public function show(Vojske $vojske)
    {
        abort_if(Gate::denies('vojske_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vojske->load('tip_vojskes');

        return view('admin.vojskes.show', compact('vojske'));
    }

    public function destroy(Vojske $vojske)
    {
        abort_if(Gate::denies('vojske_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vojske->delete();

        return back();
    }

    public function massDestroy(MassDestroyVojskeRequest $request)
    {
        Vojske::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
