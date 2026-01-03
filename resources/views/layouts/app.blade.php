<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IB CORP - Gestión Profesional</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#0D1B38] text-slate-200">
    <div class="min-h-screen">
        <nav class="bg-[#0D1B38] border-b border-slate-800 shadow-2xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center gap-8">
                        <span class="text-white font-bold text-xl tracking-tighter">CORPORACIÓN ISGROUP</span>
                        <div class="hidden sm:flex space-x-6">
                            <a href="{{ route('dashboard') }}" 
                               class="text-sm font-medium transition {{ request()->routeIs('dashboard') ? 'text-[#4a90e2] border-b-2 border-[#4a90e2] pb-1' : 'text-slate-400 hover:text-white' }}">
                                Dashboard
                            </a>
                            <a href="{{ route('productos.index') }}" 
                               class="text-sm font-medium transition {{ request()->routeIs('productos.*') ? 'text-[#4a90e2] border-b-2 border-[#4a90e2] pb-1' : 'text-slate-400 hover:text-white' }}">
                                Inventario
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-6">
                        <a href="{{ route('profile.edit') }}" class="text-sm text-slate-400 hover:text-[#4a90e2] transition">
                            Configuración de Perfil
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm font-bold text-red-500 hover:text-red-400 transition">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $slot ?? '' }}
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>