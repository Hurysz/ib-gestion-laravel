@extends('layouts.app')

@section('content')
    <h1>Registrar Nuevo Producto</h1>
    <a href="{{ route('productos.index') }}">← Volver al listado</a>

    <form action="{{ route('productos.store') }}" method="POST" style="margin-top: 20px;">
        @csrf
        <div>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        </div><br>

        <div>
            <label>Descripción:</label><br>
            <textarea name="descripcion" required>{{ old('descripcion') }}</textarea>
        </div><br>

        <div>
            <label>Precio:</label><br>
            <input type="number" name="precio" step="0.01" value="{{ old('precio') }}" required>
        </div><br>

        <div>
            <label>Stock:</label><br>
            <input type="number" name="stock" value="{{ old('stock') }}" required>
        </div><br>

        <button type="submit" style="background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            Guardar en Sistema
        </button>
    </form>
@endsection