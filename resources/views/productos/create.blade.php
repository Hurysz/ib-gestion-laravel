<h1>Registrar Producto en Sistema</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <p>Nombre: <input type="text" name="nombre"></p>
    <p>Descripción: <textarea name="descripcion"></textarea></p>
    <p>Precio: <input type="number" name="precio" step="0.01"></p>
    <p>Stock: <input type="number" name="stock"></p>
    <button type="submit">Guardar Producto</button>
</form>