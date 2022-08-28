@csrf
<div class="form-floating m-2">
    <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo', $producto->codigo) }}">
    <label for="codigoproducto">Código Producto</label>
</div>
<div class="form-floating m-2">
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}">
    <label for="nombreproducto">Nombre producto</label>
</div>
<div class="form-floating m-2">
    <select class="selectpicker" id="categoria" name="categoria">

    </select>
</div>
<div class="form-floating m-2">
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $producto->descripcion) }}">
    <label for="descripcionproducto">Descripción</label>
</div>
<div class="form-floating m-2">
    <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}">
    <label for="precioventaproducto">Precio venta</label>
</div>
