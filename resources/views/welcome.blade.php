@extends('layouts.master')


@section('content')

<main>

  <div class="px-4 my-5 text-center">

    <h1 class="display-6 fw-bold py-1">Software de gestión de stock</h1>
    <div class="col-sm-12">
        <a href="{{ route('producto.create') }}" class="btn btn-primary">Crear nuevo producto</a>
        <a href="{{ route('producto.index') }}" class="btn btn-danger">Listar productos</a>
    </div>

      </div>
    </div>
  </div>
  @stop