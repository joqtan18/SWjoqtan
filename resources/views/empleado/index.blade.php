@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <div class="row">
        <div class="col-xl-6">
            <a href="{{url('empleado/create')}}" class="btn btn-primary">Registrar Empleado</a>
        </div>
        <div class="col-xl-6">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Empleados Registrados</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>id</th>
                    <th>DNI</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Sexo</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($empleado as $emp)
                    <tr>
                        <td>{{$emp->emp_id}}</td>
                        <td>{{$emp->emp_dni}}</td>
                        <td>{{$emp->emp_apellidos}}</td>
                        <td>{{$emp->emp_nombres}}</td>
                        <td>{{$emp->emp_sexo}}</td>
                        <td>{{$emp->emp_telefono}}</td>
                        <td>{{$emp->emp_celular}}</td>
                        <td>{{$emp->emp_direccion}}</td>
                        <td>{{$emp->emp_email}}</td>
                        <td><a href="{{url('empleado/'.$emp->emp_id.'/edit')}}" class="btn btn-sm btn-warning">Editar</a></td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection