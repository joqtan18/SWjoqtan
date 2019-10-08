@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <h1>Registrar Documentos</h1>
    @if (count($errors)>0)
      <div class="alert alert-danger">
        <p>Corregir los siguientes campos:</p>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
</div>
<form action="{{url('documento')}}" method="POST" class="my-3">
    @method('POST')
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xl-2 col-md-6">
            <div class="form-group">
                <label for="">documento</label>
                <input type="text" name="doc_nombre" class="form-control" required maxlength="8" minlength="8" value="{{old('doc_nombre')}}">
            </div>
        </div>
        <div class="col-xl-12 my-4">
            <div class="form-group">
                <input type="submit" value="Registrar" class="btn btn-primary">
                <a href="{{url('documento')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
</form>

@endsection