@extends('layouts.app')

@section('content')
    <h1>Inventario de Productos - IB CORP</h1>
    <a href="{{ route('productos.create') }}" style="background: #28a745; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px;">+ Agregar Nuevo Producto</a>
s
    <table border="1" style="width: 100%; margin-top: 15px; border-collapse: collapse;">
        <thead style="background: #eee;">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
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
                <td>S/ {{ number_format($producto->precio, 2) }}</td>
                <td>{{ $producto->stock }}</td>
                <td>
                    <a href="{{ route('productos.edit', $producto->id) }}">Editar</a> | 
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Eliminar?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection