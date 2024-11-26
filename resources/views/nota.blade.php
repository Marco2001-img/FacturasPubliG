@extends('layout.app')

@section("Titulo")
    Ver todas Las Notas
@endsection

@section("contenido")
<div class="tile">

    <h3 class="tile-title">Mis Notas</h3>

    <div class="d-flex justify-end">
        <input type="text" class="form-control" placeholder="buscar">
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
          <th>WHASTAPP</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>120</td>
          <td>Marco</td>
          <td>2 lonas</td>
          <td>$100</td>
          <td>$300</td>
          <td><a href="#"><i class="bi bi-filetype-pdf"></i></a></td>
          <td><a href="#" id="whatsappLink"><i class="bi bi-whatsapp"></i></a></td>
          <td><i class="bi bi-eye-fill"></i></td>
          <td><i class="bi bi-pencil-square"></i></td>
          <td><i class="bi bi-trash3-fill"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
