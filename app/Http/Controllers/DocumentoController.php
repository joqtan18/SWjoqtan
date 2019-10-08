<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use DB;

class DocumentoController extends Controller
{
    public function exportPdf()
    {

    }

    public function index()
    {
        $data = DB::table('documentos')->get();
        return view('documento.index',['documentos'=>$data]);
    }
    public function create()
    {
        return view('documento.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $documento = Documentos::create($data);
        return redirect()->route('documento.index')->with('status', 'Documento agregado correctamente!');
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request, $id)
    {

    
    }
}
