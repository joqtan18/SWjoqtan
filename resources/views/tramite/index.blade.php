@extends('plantilla.plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<form action="" class="login">
		<table >
			<tr>
				<center><h3 class="text-center">SITUACION DE MI TRAMITE</h3></center>
			</tr>	
			<tr>
				<div>
					<label> COMPLETE EL SIGUIENTE FORMULARIO</label>
				</div>
			</tr>
			<tr>
		        <div class="col-xl-3 col-md-6">
            		<div class="form-group">
                		<label for="">Año: </label>
                			<select name="" class="form-control" required>
                  			<option value="" hidden>--- Seleccione ---</option>
                  			<option value="1" >2015</option>
                  			<option value="2" >2016</option>
                			</select>
            		</div>
        </div>

			<div class="col-xl-8 col-md-8">
				<label>Nª del Tramite :
				<div class="form-group">
                <input type="text" size="31" placeholder="ingrese aqui el numero de tramite" name="" id="" class="form-control" required maxlength="11" minlength="11" value="{{old('')}}">
            	</div>
				</label>
			</div>
			</tr>

		</table>
		<div>
			<input type="submit" name="" value="BUSCAR" class="btn btn-info">	
		</div>
		
		
	</form>

</body>
</html>
@endsection