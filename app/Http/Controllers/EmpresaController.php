<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Http\Requests\EmpresaRequestForm;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('admin.empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmpresaRequestForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EmpresaRequestForm $request)
    {
        Empresa::create($request->all());

        return redirect()->route('empresa.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view('admin.empresas.update', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmpresaRequestForm $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequestForm $request, $id)
    {
        $empresa = Empresa::find($id);
        $empresa->update($request->all());

        return redirect()->route('empresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
