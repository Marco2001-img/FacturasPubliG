@extends('layout.app')

@section('Titulo')
<i class="bi bi-speedometer"></i> Dashboard
@endsection

@section('contenido')
<div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
        <div class="info">
          <h4>Usuarios</h4>
          <p><b>15</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
        <div class="info">
          <h4>Trabajos</h4>
          <p><b>125</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon bi bi-folder2 fs-1"></i>
        <div class="info">
          <h4>Proveedores</h4>
          <p><b>10</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
        <div class="info">
          <h4>Empleados</h4>
          <p><b>500</b></p>
        </div>
      </div>
    </div>
  </div>

  <div class="tile">
    <h3 class="tile-title">Notas</h3>
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

  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Weekly Sales - Last week</h3>
        <div class="ratio ratio-16x9">
          <div id="salesChart"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Support Requests</h3>
        <div class="ratio ratio-16x9">
          <div id="supportRequestChart"></div>
        </div>
      </div>
    </div>
  </div>
@endsection
