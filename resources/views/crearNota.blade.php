@extends("layout.app")

@section("Titulo")
<i class="bi bi-card-checklist"></i> Crear Nota
@endsection

@section("contenido")
<form action="">
<div class="tile">
  <h3 class="tile-title"></h3>
  <div class="d-flex justify-content-end">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id='factura'>
      <label class="form-check-label"  for="flexCheckChecked">
       Require Factura
      </label>
    </div>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr class="table-success">
        <th>Nota</th>
        <th>Contacto</th>
        <th>Telefono</th>
        <th>Fecha</th>
        <th>Diseñador A Cargo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <input class="form-control" type="text" placeholder="Nota 12" disabled>
        </td>
        <td>
          <input class="form-control" type="text" name="contacto" id="contacto" placeholder="Contacto ">
        </td>
        <td>
          <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Telefono ">
        </td>
        <td>
          <input class="form-control" name="fecha" id="fecha" type="date">
        </td>
        <td>
          <select class="form-select form-select-sm" id="diseñador" name="diseñador" aria-label="Small select example">
            <option value="1">Tito</option>
            <option value="2">Marilu</option>
          </select>
        </td>
      </tr>
      <tr class="table-success">
            <th colspan="3">Public G</th>
            <th colspan="1">Entrega</th>
            <th>Pago</th>
      </tr>
      <tr>
       <th colspan="3">
        <select class="form-select form-select-sm" id="concepto" name="concepto"  aria-label="Small select example">
            <option value=""></option>
            <option value="anuncio2d">anuncio 2D</option>
            <option value="anuncio luminoso">Anuncio luminoso</option>
            <option value="bandera publicitaria">Bandera publicitaria</option>
            <option value="articulospublicitarios">Articulos publicitario</option>
            <option value="credencial">Credencial</option>
            <option value="diseño">Diseño</option>
            <option value="electrostatico">Electrostatico</option>
            <option value="estructuraConLona">Estructura con lona</option>
            <option value="etiquetas">Etiquetas</option>
            <option value="iman">Iman</option>
            <option value="letas3d">Letras 3D</option>
            <option value="lona">Lona</option>
            <option value="microperforado">Microperforado</option>
            <option value="nota">Nota</option>
            <option value="playeras">Playeras</option>
            <option value="Promosionales">Promosionales</option>
            <option value="sello">Sello</option>
            <option value="señaletica">Señaletica</option>
            <option value="Serigrafia">Serigrafia</option>
            <option value="tabloides">Tabloides</option>
            <option value="tarjeta">Tarjeta</option>
            <option value="tazas">Tazas</option>
            <option value="textil">Textil</option>
            <option value="toldoenrollable">Toldo Enrollable</option>
            <option value="toldoFijo">Toldo Fijo</option>
            <option value="vinil con suaje">Vinil Con Suaje</option>
            <option value="vinil corte">Vinil Corte</option>
            <option value="vinil impreso">Vinil impreso</option>
            <option value="volante">Volante</option>
          </select>
       </th>
       <th >
        <select class="form-select form-select-sm" id="entrega" name="entrega" aria-label="Small select example">
            <option value="1">Galindas</option>
            <option value="2">Domicilio</option>
            <option value="2">Instalacion</option>
          </select>
       </th>

       <th >
        <select class="form-select form-select-sm" id="pago" name="pago" aria-label="Small select example">
            <option value="1">Efectivo</option>
            <option value="2">Trasferencia</option>
            <option value="2">Tarjeta de credito</option>
            <option value="">Tarjeta de debito</option>
          </select>
       </th>
      </tr>
      <tr class="table-success">
         <td id="txt_cantidad">
                   <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-plus-lg"></i>
        </button>
            Cantidad
        </td>
        <td id="txt_descripcion">Descripcion</td>
        <td id="txtPreciounitario">Precio Unitario</td>
        <td class="h5">Resultado</td>
       <td class="table-success"></td>
      </tr>
      <tr >
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">PUBLI G</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <form id="form">
                <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="txtCantidad" placeholder="cantidad" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                <textarea class="form-control" id="txtdescripcion" rows="3" required></textarea>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Costo</label>
                <input type="text" class="form-control" id="txtCosto" placeholder="costo" required>
              </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="agregarLista">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  <div >
    </div>

    <tbody id="tableProductos">
     
    </tbody>
      <tr class="table-success">
        <td  class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5"></td>
        <td id="subTotal" class="h5"></td>
        <td class="table-success"></td>
      </tr>
      <tr>
        <td class="table-success">
        </td>
        <td class="table-success"></td>
        <td class="h5">
        IVA
        </td>
        <td id="txtIva" class="h5">
         $0.00
        </td>
      </tr>
      <tr>
        <td class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5 ">Total</td>
        <td id="txt_Total" class="h5">$0.00</td>
      </tr>
      <tr>
        <td class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5 ">Anticipo</td>
        <td>
          <input type="text" class="form-control" id="anticipo" name="anticipo" placeholder="anticipo">
        </td>
      </tr>
      <tr>
        <td class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5 ">Por Pagar</td>
        <td id="txtPorpagar" class="h5">$0.00</td>
      </tr>
    </tbody>
  </table>
  <hr>
  <div class="d-flex justify-content-end">
      <input type="submit" class="btn btn-success" value="Crear Nota">
  </div>
  </form>
</div>

@endsection
