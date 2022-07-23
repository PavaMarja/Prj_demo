<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOruzjaRequest;
use App\Http\Requests\StoreOruzjaRequest;
use App\Http\Requests\UpdateOruzjaRequest;
use App\Models\Oruzja;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OruzjaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('oruzja_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $oruzjas = Oruzja::all();

        return view('admin.oruzjas.index', compact('oruzjas'));
    }

    public function create()
    {
        abort_if(Gate::denies('oruzja_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oruzjas.create');
    }

    public function store(StoreOruzjaRequest $request)
    {
        $oruzja = Oruzja::create($request->all());

        return redirect()->route('admin.oruzjas.index');
    }

    public function edit(Oruzja $oruzja)
    {
        abort_if(Gate::denies('oruzja_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oruzjas.edit', compact('oruzja'));
    }

    public function update(UpdateOruzjaRequest $request, Oruzja $oruzja)
    {
        $oruzja->update($request->all());

        return redirect()->route('admin.oruzjas.index');
    }

    public function show(Oruzja $oruzja)
    {
        abort_if(Gate::denies('oruzja_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oruzjas.show', compact('oruzja'));
    }

    public function destroy(Oruzja $oruzja)
    {
        abort_if(Gate::denies('oruzja_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $oruzja->delete();

        return back();
    }

    public function massDestroy(MassDestroyOruzjaRequest $request)
    {
        Oruzja::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
