<h1>Registrar Nuevo Producto - Corporación ISGroup</h1>

@if ($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
        <strong>Por favor, corrige los siguientes errores:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('productos.store') }}" method="POST">
    @csrf 

    <div>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre') <small style="color: red;">{{ $message }}</small> @enderror
    </div><br>

    <div>
        <label>Descripción:</label><br>
        <textarea name="descripcion">{{ old('descripcion') }}</textarea>
        @error('descripcion') <small style="color: red;">{{ $message }}</small> @enderror
    </div><br>

    <div>
        <label>Precio:</label><br>
        <input type="number" name="precio" step="0.01" value="{{ old('precio') }}">
        @error('precio') <small style="color: red;">{{ $message }}</small> @enderror
    </div><br>

    <div>
        <label>Stock:</label><br>
        <input type="number" name="stock" value="{{ old('stock') }}">
        @error('stock') <small style="color: red;">{{ $message }}</small> @enderror
    </div><br>

    <button type="submit">Guardar Producto</button>
    <a href="{{ route('productos.index') }}">Cancelar</a>
</form>