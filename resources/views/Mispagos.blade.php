@extends('layout.app')

@section("Titulo")
<i class="bi bi-award-fill"></i> Mis Pagos Pendientes
@endsection

@section('contenido')

@if(session('elliminada'))
<div class="alert alert-warning" role="alert">
  {{ session('elliminada') }}
  </div>
@endif

@if (session('actualizarPago'))
<div class="alert alert-warning" role="alert">
    {{ session('actualizarPago') }}
</div>
@endif

<table class="table">

    <thead>
      <tr>
        
        <th>Nombre pago</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Pago</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pagos as $pago )
      <tr>
        <th >{{ $pago->nombre }}</th>
        <td>{{ $pago->descripcion }}</td>
        <td>{{ $pago->fecha }}</td>
        <td> ${{ $pago->precio }}</td>
        <td>
        <form action="{{ route('pago.borrar', $pago->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                </form>  
      </td>
        <td><a href="{{ route('Info.Verpago', $pago->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
        
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection
