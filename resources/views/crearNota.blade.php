@extends("layout.app")

@section("Titulo")
<i class="bi bi-card-checklist"></i> Crear Nota
@endsection

@section("contenido")
<div class="tile">
  <h3 class="tile-title"></h3>
  <div class="d-flex justify-content-end">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
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
            <input class="form-control" type="text" placeholder="Nota "> 
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
         <td id="txt_cantidad"><a class="btn btn-primary" href="#"><i class="bi bi-plus-square fs-5"></i></a> Cantidad</td>
        <td id="txt_descripcion">Descripcion</td>
        <td id="txtPreciounitario">Precio Unitario</td>
        <td id="txtTotal">Total</td>
        <td>Entrega en</td>
      </tr>
      <tr>
        <td> <input class="form-control" id="txt_cantidad"type="text" placeholder="Cantidad "></td>
        <td>
          <input class="form-control" type="text" placeholder="Descipcion ">
        </td>
        <td>
          <input class="form-control" type="text" id="txt_subtotal" placeholder="Total ">
        </td>
        <td>
          <label class="form-label" id="resultado_lista">$0.0</label>
        </td>
        <td>
          <select class="form-select form-select-sm" aria-label="Small select example">
            <option value="1">Galindas</option>
            <option value="2">Domicilio</option>
            <option value="2">Instalacion</option>
          </select>
        </td>
      </tr>
      <tr class="table-success">
        <td>PubliG</td>
        <td>Concepto</td>
        <td>Subtotal</td>
        <td id="subTotal">$0.00</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <select class="form-select form-select-sm" aria-label="Small select example">
            <option value="1">ANUNICO 2D</option>
            <option value="2">ANUNCIO LUMINOSO</option>
            <option value="2">BANDERA PUBLICITARIA</option>
            <option value="3">CREDENCIAL</option>
            <option value="4">DISEÑO</option>
            <option value="5">ELECTROPLASTICO</option>
            <option value="6">ESTRUCTURA CON LONA</option>
            <option value="7">ETIQUETAS</option>
            <option value="8">IMÁN</option>
            <option value="9">LETRAS 3D</option>
            <option value="10">LONA</option>
            <option value="11">MICROPERFORADO</option>
            <option value="12">NOTA</option>
            <option value="13">PLAYERAS</option>
            <option value="14">PROMOSIONALES</option>
            <option value="15">SELLO</option>
            <option value="16">SEÑALATICA</option>
            <option value="17">SERIGRAFIA</option>
            <option value="18">TABLOIDES</option>
            <option value="19">TARJETA</option>
            <option value="20">TAZAS</option>
            <option value="21">TEXTIL</option>
            <option value="22">TOLDO ENROLLABLE</option>
            <option value="23">TOLDO FIJO</option>
            <option value="24">VINIL CON SUAJE</option>
            <option value="25">VINIL CORTE</option>
          </select>
        </td>
       
        <td>IVA</td>
        <td id="txtIva">
         $0.00
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Total</td>
        <td id="txt_Total">$0.00</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Anticipo</td>
        <td id="txt_anticipo">$0.00</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Por Pagar</td>
        <td id="txtPorpagar">$0.00</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection