@extends('layouts.master')

@section('title', "Nuevo producto")
@section('content')

<main>

    <div class="px-4 my-5 text-center">

        <h1>Registrar nuevo producto</h1>

    </div>
    <div class="row">
        <div class="col-sm-3">
          <!-- Se crea solo para centrar el formulario de registro-->
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <form method="post" action="{{ route('producto.store') }}">
                @csrf
                <div class="form-floating m-2">
                  <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo') }}">
                  <label for="codigoproducto">Código Producto</label>
                </div>
                <div class="form-floating m-2">
                  <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                  <label for="nombreproducto">Nombre producto</label>
                </div>
      
                <div class="form-floating m-2">
      
                  <select class="selectpicker" id="categoria" name="categoria">
                  </select>
      
                </div>
      
      
      
                <div class="form-floating m-2">
                  <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                  <label for="descripcionproducto">Descripción</label>
                </div>
      
                <div class="form-floating m-2">
                  <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio') }}">
                  <label for="precioventaproducto">Precio venta</label>
                </div>
                <div class="text-center">
                  <button class="w-50 btn btn-lg btn-primary" type="submit">Registrar producto</button>
                </div>
      
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
      
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <!-- Se crea solo para centrar el formulario de registro-->
        </div>
      </div>
    @stop