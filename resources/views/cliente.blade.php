@extends("layout.app")

@section("Titulo")
<i class="bi bi-file-person"></i> Nuevo Cliente
@endsection

@section("contenido")
<div class="tile">
    <div class="tile-body">
      <form class="row">
        <div class="mb-3 col-md-6">
          <label class="form-label">Razon Social</label>
          <input class="form-control" type="text">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">RFC</label>
          <input class="form-control" type="text">
        </div>

        <label class="form-label">Nombre Comercial</label>
        <hr>
        <div class="mb-3 col-md-6">
            <label class="form-label">Regimen Fiscal</label>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Contacto</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Telefono</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Correo</label>
            <input class="form-control" type="text">
          </div>
          <label class="form-label">Direccion</label>
          <hr>
           <div class="mb-3 col-md-6">
            <label class="form-label">Calle</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">No. Exterior</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">No. Interior</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Entre Calle</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Y Calle</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Codigo Postal</label>
            <input class="form-control" type="text">
          </div>

        <div class="mb-3 col-md-4 align-self-end">
          <button class="btn btn-primary" type="button"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
        </div>
      </form>
    </div>
  </div>
@endsection