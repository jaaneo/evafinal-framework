@extends('layouts.master')

@section('title', "Listado de productos")
@section('content')

<main>

  <div class="px-4 my-5 text-center">

    <h1 class="display-6 fw-bold py-1">Listado de productos</h1>
    <div class="col-sm-12">
       <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        Código
                    </th>
                    <th>
                        Nombre producto
                    </th>
                    <th>
                        Descripción
                    </th>
                    <th>
                        Precio venta
                    </th>
                    <th>
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                 @foreach($productos as $producto)
                     <tr>
                        <td>
                            {{ $producto->codigo}}
                        </td>
                        <td>
                            {{ $producto->nombre}}
                        </td>
                        <td>
                            {{ $producto->descripcion}}
                        </td>
                        <td>
                            {{ $producto->precio}}
                        </td>
                        <td>
                            <a href="{{ route('producto.edit', $producto) }}" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </td>
                     </tr>
                 @endforeach
            </tbody>
       </table>
    </div>

      </div>
    </div>
  </div>
  @stop