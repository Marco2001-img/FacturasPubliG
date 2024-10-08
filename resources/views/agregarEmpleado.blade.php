@extends("layout.app")

@section("Titulo")
<i class="bi bi-person-plus-fill"></i> Nuevo Empleado
@endsection

@section("contenido")
<div class="tile">
    <div class="tile-body">
      <form class="row">
        <div class="mb-3 col-md-3">
          <label class="form-label">Nombre</label>
          <input class="form-control" type="text">
        </div>
        <div class="mb-3 col-md-3">
          <label class="form-label">Apellido Materno</label>
          <input class="form-control" type="text">
        </div>
        <div class="mb-3 col-md-3">
            <label class="form-label">Apellido Paterno</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Nombre del Banco</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Numero de cuenta</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">ID Banco</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Salario</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Cargo</label>
            <input class="form-control" type="text">
          </div>
        <div class="mb-3 col-md-4 align-self-end">
          <button class="btn btn-primary" type="button"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
        </div>
      </form>
    </div>
  </div>
@endsection