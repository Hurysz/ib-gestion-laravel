@extends('layouts.app')

@section('content')
<div class="bg-[#162a52] rounded-2xl shadow-2xl border border-slate-700 overflow-hidden">
    <div class="p-8 border-b border-slate-700 flex justify-between items-center bg-[#1c3461]">
        <h2 class="text-2xl font-black text-white uppercase tracking-widest">Inventario de Productos</h2>
        <a href="{{ route('productos.create') }}" class="bg-[#4a90e2] hover:bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold shadow-lg transition transform hover:-translate-y-1 text-xs">
            + NUEVO PRODUCTO
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-[#0D1B38] text-slate-400 uppercase text-[10px] font-bold tracking-[0.2em]">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Nombre</th>
                    <th class="px-6 py-4">Descripción</th> <th class="px-6 py-4">Precio</th>
                    <th class="px-6 py-4 text-center">Stock</th>
                    <th class="px-6 py-4 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-700 text-sm">
                @foreach($productos as $producto)
                <tr class="hover:bg-[#1c3461] transition duration-200">
                    <td class="px-6 py-4 text-slate-500 font-mono">#{{ $producto->id }}</td>
                    <td class="px-6 py-4 font-bold text-white">{{ $producto->nombre }}</td>
                    <td class="px-6 py-4 text-slate-400 max-w-xs truncate">{{ $producto->descripcion }}</td> <td class="px-6 py-4 text-[#4a90e2] font-semibold">S/ {{ number_format($producto->precio, 2) }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-3 py-1 rounded-lg text-[10px] font-black uppercase {{ $producto->stock > 5 ? 'bg-green-500/10 text-green-400 border border-green-500/20' : 'bg-red-500/10 text-red-400 border border-red-500/20' }}">
                            {{ $producto->stock }} UNID.
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right space-x-4">
                        <a href="{{ route('productos.edit', $producto->id) }}" class="text-slate-400 hover:text-white font-bold text-xs uppercase transition">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-500 hover:text-red-400 font-bold text-xs uppercase transition" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection