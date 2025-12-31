<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión IB - Larsson</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f0f2f5; }
        .card { background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #1a202c; }
        p { color: #4a5568; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Bienvenido al Sistema IB</h1>
        <p>Desarrollador: {{ $usuario }}</p>
        <p>Líder a cargo: {{ $jefe }}</p>
    </div>
</body>
</html>