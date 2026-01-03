<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("¡Bienvenido al Sistema de IB CORP!") }}
                    <br><br>
                    <a href="{{ route('productos.index') }}" style="background: #4a90e2; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                        Ir al Inventario de Productos
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
