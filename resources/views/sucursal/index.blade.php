@extends('layouts.master_admin')

@section('title', "Listado de sucursales")
@section('content')

<main>

  <div class="px-4 my-5 text-center">

    <h1 class="display-6 fw-bold py-1">Listado de sucursales</h1>
    <div class="col-sm-12">
       <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        Código sucursal
                    </th>
                    <th>
                        Nombre sucursal
                    </th>
                    <th>
                        Ciudad sucursal
                    </th>
                    <th>
                        Encargado sucursal
                    </th>
                    <th>
                        Telefono sucursal
                    </th>
                    <th>
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                 @foreach($sucursales as $sucursal)
                     <tr>
                        <td>
                            {{ $sucursal->codigo}}
                        </td>
                        <td>
                            {{ $sucursal->nombre}}
                        </td>
                        <td>
                            {{ $sucursal->ciudad}}
                        </td>
                        <td>
                            {{ $sucursal->encargado}}
                        </td>
                        <td>
                            {{ $sucursal->telefono}}
                        </td>
                        <td>
                            <a href="{{ route('sucursal.edit', $sucursal) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('sucursal.show', $sucursal) }}" class="btn btn-primary">ver</a>
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