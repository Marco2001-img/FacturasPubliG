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
      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
      <label class="form-check-label" for="flexCheckChecked">
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
          <input class="form-control" type="text" placeholder="Contacto ">
        </td>
        <td>
          <input class="form-control" type="text" placeholder="Telefono ">
        </td>
        <td>
          <input class="form-control" type="date">
        </td>
        <td>
          <select class="form-select form-select-sm" aria-label="Small select example">
            <option value="1">Tito</option>
            <option value="2">Marilu</option>
          </select>
        </td>
      </tr>
      <tr class="table-success">
            <th colspan="3">Public G</th>
            <th colspan="2">Concepto</th>
      </tr>
      <tr>
       <th colspan="3">
        <select class="form-select form-select-sm" aria-label="Small select example">
            <option value="1">Galindas</option>
            <option value="2">Domicilio</option>
            <option value="2">Instalacion</option>
          </select>
       </th>
       <th colspan="2">
        <select class="form-select form-select-sm" aria-label="Small select example">
            <option value="1">Galindas</option>
            <option value="2">Domicilio</option>
            <option value="2">Instalacion</option>
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
        <td class="h5">Total</td>
        <td></td>
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
                <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="txtCantidad" placeholder="cantidad">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                <textarea class="form-control" id="txtdescripcion" rows="3"></textarea>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Costo</label>
                <input type="text" class="form-control" id="txtCosto" placeholder="costo">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="Operacion()">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  <div >
    <tr >
        <td id="listaProductos"></td>
        <td>2</td>
        </div>
      </tr>

      <tr class="table-success">
        <td  class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5">Subtotal</td>
        <td id="subTotal" class="h5">$0.00</td>
        <td class="table-success"></td>
      </tr>
      <tr>
        <td class="table-success">
        </td>
        <td class="table-success">
        </td>
        <td class="h5">IVA</td>
        <td id="txtIva" class="h5">
         $0.00
        </td>
      </tr>
      <tr>
        <td class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5">Total</td>
        <td id="txt_Total" class="h5">$0.00</td>
      </tr>
      <tr>
        <td class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5">Anticipo</td>
       <td>
        <input type="text" class="form-control" placeholder="anticipo">
    </td>
      </tr>
      <tr>
        <td class="table-success"></td>
        <td class="table-success"></td>
        <td class="h5">Por Pagar</td>
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
