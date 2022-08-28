<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  </style>
</head>

<body>

  <!-- Header -->
  @section('header')
  <!--section cuando quiero agregar un contenido inicial html-->
  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="52"
          height="37">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="{{ route('producto.create') }}" class="nav-link px-2 link-dark">Agregar producto</a></li>
        <li><a href="{{ route('producto.index') }}" class="nav-link px-2 link-dark">Listar productos</a></li>
        <li><a href="{{ route('sucursal.create') }}" class="nav-link px-2 link-dark">Agregar sucursal</a></li>
        <li><a href="{{ route('sucursal.index') }}" class="nav-link px-2 link-dark">Listar sucursal</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="#"><button type="button" class="btn btn-outline-primary me-2 text-uppercase"">Iniciar sesión</button></a>
        <a href="#"><button type="button" class="btn btn-primary text-uppercase">Registrarse</button></a>
      </div>
    </header>
  </div>
  @show

  <!-- Body -->

  <div class="container">
    @yield('content')
    <!--yield, se usa cuando quiero declararlo solamente -->
  </div>

  <!-- Footer -->

  @section('footer')
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2022 RRA Inventory Company, Inc</p>

      <a href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/index" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Soporte</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Base de conocimientos</a></li>
      </ul>
    </footer>
  </div>
  @show
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
</body>

</html>