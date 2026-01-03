<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IB CORP - Gestión de Inventario</title>
    <style>
        body { font-family: sans-serif; margin: 20px; line-height: 1.6; }
        nav { background: #f4f4f4; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .container { max-width: 1000px; margin: auto; }
        .alert-success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <strong>CORPORACIÓN ISGROUP</strong> | 
            <a href="{{ route('productos.index') }}">Inventario</a> | 
            <a href="{{ route('productos.create') }}">Nuevo Producto</a>
        </nav>

        @yield('content')
    </div>
</body>
</html>