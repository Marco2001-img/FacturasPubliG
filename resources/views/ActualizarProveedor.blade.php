@extends('layout.app')

@section("Titulo")
<i class="bi bi-pencil-fill"></i> Actualiza La Informacion De Proveedor
@endsection
@section('contenido')
<div class="card">
    <div class="card-body">
        
  
<form class="row" action="{{ route('actualizarProveedor.editar', $proveedor->id) }}" method="post">
@csrf @method('PUT')
        <div class="mb-3 col-md-6">
          <label class="form-label">NOMBRE</label>
          <input class="form-control" name="nombre" type="text"  value="{{ $proveedor->nombre }}" >
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">CORREO</label>
          <input class="form-control" type="email" name="email" value="{{ $proveedor->email}}">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Telefono</label>
            <input class="form-control" type="text" name="telefono" value="{{ $proveedor->telefono }}">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Contacto</label>
            <input class="form-control" type="text" name="contacto" value="{{ $proveedor->contacto}}">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">QUE VENDE</label>
            <input class="form-control" type="text" name="vende" placeholder="breve descripcion " value="{{ $proveedor->vende }}">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">PAGINA WEB</label>
            <input class="form-control" name="web" type="text" value="{{ $proveedor->web }}">
          </div>
           <div class="mb-3 col-md-6">
            <label class="form-label">TITULAR</label>
            <input class="form-control" type="text" name="titular" value="{{ $proveedor->titular }}">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">NOMBRE DEL BANCO</label>
            <input class="form-control" type="text" name="nombre_banco" value="{{ $proveedor->nombre_banco }}">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">NUMERO DE CUENTA</label>
            <input class="form-control" type="text" name="numero_cuenta" value="{{ $proveedor->numero_cuenta }}">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">RFC</label>
            <input class="form-control" type="text" name="rfc" value="{{ $proveedor->rfc }}"> 
          </div>
          <hr>
        <div class="mb-3 col-md-4 align-self-end">
          <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Actualizar Informacion</button>
          <a href="/verProveedor" class="btn btn-danger" type="submit"><i class="bi bi-x"></i>Cancelar</a>
        </div>
      </form>
      </div>
      </div>
@endsection