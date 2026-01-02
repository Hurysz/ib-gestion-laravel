<h1>Editar Producto: {{ $producto->nombre }}</h1>

<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT') <div>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $producto->nombre }}">
    </div><br>

    <div>
        <label>Descripción:</label><br>
        <textarea name="descripcion">{{ $producto->descripcion }}</textarea>
    </div><br>

    <div>
        <label>Precio:</label><br>
        <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}">
    </div><br>

    <div>
        <label>Stock:</label><br>
        <input type="number" name="stock" value="{{ $producto->stock }}">
    </div><br>

    <button type="submit">Actualizar Producto</button>
    <a href="{{ route('productos.index') }}">Cancelar</a>
</form>