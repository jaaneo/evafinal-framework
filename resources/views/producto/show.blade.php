@extends('layouts.master_admin')

@section('title', "Editar producto")
@section('content')

<div class="px-4 my-5">
  <i><h1>{{ $producto->nombre }}</h1></i>
  <ul>
    <li>
        Código: <strong> {{ $producto->codigo }}</strong>
    </li>
    <li>
        Nombre: <strong> {{ $producto->nombre }}</strong>
    </li>
    <li>
        Precio: <strong> ${{ $producto->precio }}</strong>
    </li>
    <li>
        Descripción: <strong> {{ $producto->descripcion }}</strong>
    </li>
  </ul>
  <form action="{{ route('producto.destroy', $producto) }}" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm" type="submit">Eliminar producto</button>
    <a href="{{ route('producto.index') }}" class="btn btn-primary btn-sm">Volver</a>
  </form>
  
</div>
@endsection
