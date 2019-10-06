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
        return view('empleado.create');
    }

    public function store(Request $request)
    {

    }

    public function show(Cliente $cliente)
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
