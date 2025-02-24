@extends('layout.app')

@section("Titulo")
<i class="bi bi-pencil-fill"></i> Actualiza La Informacion De Pago
@endsection
@section('contenido')
<div class="tile">
            <h3 class="tile-title">Informacion</h3>
            <div class="tile-body">
              <form action="{{ route('pago.editar', $pago->id) }}" method="post">
                @csrf @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Nombre</label>
                  <input class="form-control" type="text" placeholder="Nombre del pago" name="nombre" value="{{ $pago->nombre }}" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" >descripcion</label>
                  <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" value="{{ $pago->descripcion }}" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Fecha De Pago</label>
                  <input class="form-control" type="date" name="fecha" value="{{ $pago->fecha }}" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Precio</label>
                  <input class="form-control" type="text" placeholder="costo a pagar" name="precio" value="{{ $pago->precio }} " required>
                </div>
               
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Actualizar Informacion</button>
                  <a class="btn btn-secondary" href="/verPago"><i class="bi bi-x-circle-fill me-2"></i>Cancel</a>
                </div>
              </form>
            </div>
          </div>
@endsection