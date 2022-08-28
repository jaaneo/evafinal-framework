@extends('layouts.master_admin')

@section('title', "Nueva sucursal")
@section('content')

<main>

    <div class="px-4 my-5 text-center">

        <h1>Registrar nueva sucursal</h1>

    </div>
    <div class="row">
        <div class="col-sm-3">
          <!-- Se crea solo para centrar el formulario de registro-->
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <form method="post" action="{{ route('sucursal.store') }}">
                @csrf <!-- para que no expiré el formulario y no se puedan hacer inyecciones-->
                <div class="form-floating m-2">
                  <input type="text" class="form-control" id="codigosucursal" name="codigosucursal" value="{{ old('codigosucursal') }}">
                  <label for="codigosucursal">Código Producto</label>
              </div>
              <div class="form-floating m-2">
                  <input type="text" class="form-control" id="nombresucursal" name="nombresucursal" value="{{ old('nombresucursal') }}">
                  <label for="nombresucursal">Nombre sucursal</label>
              </div>
              <div class="form-floating m-2">
                <input type="text" class="form-control" id="ciudadsucursal" name="ciudadsucursal" value="{{ old('ciudadsucursal') }}">
                <label for="ciudadsucursal">Ciudad</label>
            </div>
              <div class="form-floating m-2">
                  <input type="text" class="form-control" id="encargadosucursal" name="encargadosucursal" value="{{ old('encargadosucursal') }}">
                  <label for="encargadosucursal">Encargado sucursal</label>
              </div>
              <div class="form-floating m-2">
                  <input type="number" class="form-control" id="telsucursal" name="telsucursal" value="{{ old('telsucursal') }}">
                  <label for="telsucursal">Teléfono sucursal</label>
              </div>
                <div class="text-center">
                  <button class="w-50 btn btn-lg btn-primary" type="submit">Registrar sucursal</button>
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
       </tbody>
        </div>
      </div>
    @stop