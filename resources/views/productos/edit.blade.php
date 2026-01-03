@extends('layouts.app')

@section('content')
    <h1>Editar Producto: {{ $producto->nombre }}</h1>
    <a href="{{ route('productos.index') }}">← Volver al listado</a>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST" style="margin-top: 20px;">
        @csrf
        @method('PUT') <div>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ $producto->nombre }}" required>
        </div><br>

        <div>
            <label>Descripción:</label><br>
            <textarea name="descripcion" required>{{ $producto->descripcion }}</textarea>
        </div><br>

        <div>
            <label>Precio:</label><br>
            <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}" required>
        </div><br>

        <div>
            <label>Stock:</label><br>
            <input type="number" name="stock" value="{{ $producto->stock }}" required>
        </div><br>

        <button type="submit" style="background: #ffc107; color: black; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            Actualizar Información
        </button>
    </form>
@endsection