@extends('layout.app')

@section("Titulo")
<i class="bi bi-grid-3x3-gap-fill"></i> Nuevo Proveedor
@endsection

@section("contenido")

<div class="tile">
  <div class="tile-body">
    @if(session('nuevoProveedor'))
    <div class="alert alert-info" role="alert">
       {{ session('nuevoProveedor') }}
    </div>
    @endif
      <form class="row" action="{{ route('nuevoPrveedor.store') }}" method="post">
      @csrf
        <div class="mb-3 col-md-6">
          <label class="form-label">NOMBRE</label>
          <input class="form-control" name="nombre" type="text">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">CORREO</label>
          <input class="form-control" type="email" name="email">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Telefono</label>
            <input class="form-control" type="text" name="telefono">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Contacto</label>
            <input class="form-control" type="text" name="contacto">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">QUE VENDE</label>
            <input class="form-control" type="text" name="vende" placeholder="breve descripcion ">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">PAGINA WEB</label>
            <input class="form-control" name="web" type="text">
          </div>
           <div class="mb-3 col-md-6">
            <label class="form-label">TITULAR</label>
            <input class="form-control" type="text" name="titular">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">NOMBRE DEL BANCO</label>
            <input class="form-control" type="text" name="nombre_banco">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">NUMERO DE CUENTA</label>
            <input class="form-control" type="text" name="numero_cuenta">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">RFC</label>
            <input class="form-control" type="text" name="rfc">
          </div>
        <div class="mb-3 col-md-4 align-self-end">
          <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
        </div>
      </form>
    </div>
  </div>
@endsection