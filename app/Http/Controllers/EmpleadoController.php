<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    public function exportPdf()
    {

    }

    public function index()
    {
       $data = DB::table('empleado')->get();
       return view('empleado.index',['empleado'=>$data]);
    }
    
    public function create()
    {
        $sexo = DB::table('sexo')->get();
        return view('empleado.create',['sexo'=>$sexo]);
    }

    public function store(Request $request)
    {

    }

    public function show(Empleado $empleado)
    {
        //
    }

    public function edit($id)
    {

        return view('empleado.edit');
    }

    public function update(Request $request, $id)
    {
            
    }

    public function destroy(Request $request, $id)
    {

    
    }
}
