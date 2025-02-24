@extends("layout.app")

@section("Titulo")
<i class="bi bi-bell-fill"></i> Nuevo Pago
@endsection

@section("contenido")
<div class="col-md-6">
@if(session('success'))
<div class="alert alert-info" role="alert">
   {{ session('success') }}
</div>
@endif
    <div class="tile">
      <div class="tile-title-w-btn">
        <h3 class="title">Pendiente A Pagar</h3>
        <form action="{{ route('productos.store') }}" method="post">
          @csrf
       <button type="submit" class="btn btn-primary icon-btn" href=""><i class="bi bi-plus-square me-2"></i>Añadir	</button>
      </div>
      <div class="tile-body">
        <div class="form-floating mb-3">

          
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nombre">
            <label for="floatingInput">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="descripcion">
            <label for="floatingInput">Descripcion</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" name="fecha" >
            <label for="floatingInput">Fecha</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="precio" name="precio">
            <label for="floatingInput">Precio</label>
          </div>

          </form>

      </div>
    </div>
  </div>
@endsection
