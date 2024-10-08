@extends('layout.app')

@section("Titulo")
<i class="bi bi-briefcase"></i> Nueva Factura
@endsection

@section("contenido")
<div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <form class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label">Razon Social</label>
            <input class="form-control" type="text">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">RFC</label>
            <input class="form-control" type="text">
          </div>
          <div class="row">
              <div class=" mb-3 col1">
                <label class="form-label">Descripcion</label>
                <textarea class="form-control" rows="4"></textarea>
              </div>

              <div class="row">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Cantidad</th>
                        <th>Clave</th>
                        <th>Descripcion</th>
                        <th>Unidad</th>
                        <th>Descuento(%)</th>
                        <th>IVA(%)</th>
                        <th>Precio</th>
                        <th>Importe</th>
                        <th>Importe</th>
                      </tr>
                    </thead>
                  </table>
              </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="tile">
                <div class="tile-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Moneda</label>
                      <select class="form-select form-select-sm" aria-label="Small select example">
                        <option value="1">Moneda</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Desglose de impuestos</label>
                      <select class="form-select form-select-sm" aria-label="Small select example">
                        <option value="1">02 Si objeto a Impuestos</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox">Credito
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Fecha De Vencimiento</label>
                                <input class="form-control" type="date">
                                <label class="form-label">20/20/2024</label>
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-primary" href="#"><i class="bi bi-plus-square fs-5"></i></a> Pagos
                        </div>
                    </div>
                    <div class="row my-2 bg-success p-3 text-light">
                        <div class="col-10">
                            Saldo
                        </div>
                        <div class="col-2">
                            1250.00
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Regimen Fiscal</label>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option value="1">601. General de Ley Pers</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Uso de CFDI</label>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option value="1">Seleccionar</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Forma de Pago</label>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option value="1">Por definir</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Metodo de Pago</label>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option value="1">PPD pago en parcialidad</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
            <div class="col-md-6">
              <div class="tile">
                <div class="tile-body">
                  <form class="form-horizontal">
                    <div class="mb-3 row">
                      <label class="form-label col-md-3">Total parcial</label>
                      <div class="col-md-8">
                        <label class="form-label col-md-3">1.077.59</label>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="form-label col-md-3">Descripcion</label>
                      <div class="col-md-8">
                       0.00
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="form-label col-md-3">IVA</label>
                      <div class="col-md-8">
                        <label class="form-label col-md-3">172.41</label>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="form-label col-md-3">Total</label>
                      <div class="col-md-9">
                        <div class="form-check">
                          <label class="form-check-label">
                            <label class="h2 col-md-3">1,250.00</label>
                          </label>
                        </div>
                      </div>
                    </div>
                 
                 
                  </form>
                </div>
              
              </div>
            </div>
          </div>
          <hr>
          <div class="mb-3 col-md-4 align-self-end">
            <button class="btn btn-primary" type="button"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    
@endsection