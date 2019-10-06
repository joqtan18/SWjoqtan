<div class="modal fade" id="modal-info-{{$emp->emp_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-tittle">Información del Empleado</h5>
      </div>
      <div class="modal-body">
        <label class="form-control">ID: {{$emp->emp_id}}</label>
        <label class="form-control">DNI: {{$emp->emp_dni}}</label>
        <label class="form-control">Apellidos: {{$emp->emp_apellidos}}</label>
        <label class="form-control">Nombres: {{$emp->emp_nombres}}</label>
        <label class="form-control">Teléfono: {{$emp->emp_telefono}}</label>
        <label class="form-control">Celular: {{$emp->emp_celular}}</label>
        <label class="form-control">E-mail: {{$emp->emp_email}}</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>