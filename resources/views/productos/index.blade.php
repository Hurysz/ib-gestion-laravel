<h1>Inventario de Productos - IB CORP</h1>
<a href="{{ route('productos.create') }}">Agregar Nuevo Producto</a>

<table border="1" style="width: 100%; margin-top: 15px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>