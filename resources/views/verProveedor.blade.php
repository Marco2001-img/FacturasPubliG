@extends("layout.app")

@section('Titulo')
    Mis Proveedores
@endsection

@section('contenido')
@if(session('elliminadoProvedor'))
<div class="alert alert-warning" role="alert">
  {{ session('elliminadoProvedor') }}
  </div>
@endif

@if (session('actualizarProveedor'))
<div class="alert alert-warning" role="alert">
    {{ session('actualizarProveedor') }}
</div>
@endif

    <table class="table">

    <thead>
      <tr>
        
        <th>Nombre</th>
        <th>email</th>
        <th>telefono</th>
        <th>contacto</th>
        <th>vende</th>
        <th>web</th>
        <th>titular</th>
        <th>nombre_banco</th>
        <th>numero_cuenta</th>
        <th>rfc</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($provedores as $provedor )
      <tr>
        <th >{{ $provedor->nombre }}</th>
        <td>{{ $provedor->email }}</td>
        <td>{{ $provedor->telefono }}</td>
        <td> {{ $provedor->contacto }}</td>
        <th >{{ $provedor->vende }}</th>
        <td>{{ $provedor->web }}</td>
        <td>{{ $provedor->titular }}</td>
        <td> {{ $provedor->nombre_banco }}</td>
        <td>{{ $provedor->numero_cuenta }}</td>
        <td>{{ $provedor->rfc }}</td>
        
        <td>
        <form action="{{ route('borrarProvedor.delete', $provedor->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                </form>  
      </td>
        <td><a href="{{ route('VistaActualizar', $provedor->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
        
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection

