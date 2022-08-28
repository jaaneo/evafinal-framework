@extends('layouts.master_admin')

@section('title', "Editar producto")
@section('content')

<div class="px-4 my-5 text-center">
  <h1>Editar producto <i>{{ $producto->nombre }}</i></h1>
</div>
<div class="row">
  <div class="col-sm-3">
    <!-- Se crea solo para centrar el formulario de registro-->
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{ route('producto.update', $producto) }}">
          @method('put')
          <x-producto-form-body :producto="$producto"/>
          <div class="text-center">
            <button class="w-50 btn btn-lg btn-primary" type="submit">Actualizar producto</button>
        </div>
        </form>
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <!-- Se crea solo para centrar el formulario de registro-->
  </div>
</div>
@stop