@extends('layout.app')

@section("Titulo")
    Ver todas Las Notas
@endsection

@section("contenido")
<div class="tile">

    <h3 class="tile-title">Mis Notas</h3>

    <div class="d-flex justify-end">
        <input type="text" class="form-control buscador" placeholder="buscar">
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NO. NOTA</th>
          <th>NOMBRE CLIENTE</th>
          <th>PEDIDO</th>
          <th>ANTICIPO</th>
          <th>TOTAL</th>
          <th>PDF</th>
         
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @foreach ($notas as $item )
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->contacto}}</td>
          <td>{{$item->telefono}}</td>
          <td>{{$item->entregaEn}}</td>
          <td>{{$item->cantidad}}</td>
          <td>{{$item->descProducto}}</td>
          <td>{{$item->costo}}</td>
          <td>{{$item->NoFactura}}</td>
          <td><a href="#"><i class="bi bi-filetype-pdf"></i></a></td>
          <td><i class="bi bi-eye-fill"></i></td>
          <td><i class="bi bi-pencil-square"></i></td>
          <td><i class="bi bi-trash3-fill"></i></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
