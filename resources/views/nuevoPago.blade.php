@extends("layout.app")

@section("Titulo")
<i class="bi bi-bell-fill"></i> Nuevo Pago
@endsection

@section("contenido")
<div class="col-md-6">
    <div class="tile">
      <div class="tile-title-w-btn">
        <h3 class="title">Pendiente A Pagar</h3>
        <p><a class="btn btn-primary icon-btn" href=""><i class="bi bi-plus-square me-2"></i>Añadir	</a></p>
      </div>
      <div class="tile-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Descripcion</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Fecha</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Precio</label>
          </div>
          <div class="row">
            <div class="col-6">

              <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Fecha de Corte</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">FECHA DE CORTE
                </label>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>
@endsection