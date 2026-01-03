@extends('layouts.app')

@section('content')
    <div class="md:flex md:items-center md:justify-between mb-8">
        <h2 class="text-2xl font-black text-white uppercase tracking-widest">Registrar Nuevo Producto</h2>
        <a href="{{ route('productos.index') }}" class="text-sm font-bold text-slate-400 hover:text-[#4a90e2] transition">
            ← Volver al listado
        </a>
    </div>

    <div class="bg-[#162a52] shadow-2xl overflow-hidden sm:rounded-2xl border border-slate-700 p-10 max-w-2xl mx-auto">
        <form action="{{ route('productos.store') }}" method="POST" class="space-y-8">
            @csrf
            
            <div>
                <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required 
                       class="block w-full bg-[#0D1B38] border-slate-600 rounded-xl shadow-sm focus:border-[#4a90e2] focus:ring-[#4a90e2] text-white placeholder-slate-500 transition py-3">
            </div>

            <div>
                <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Descripción</label>
                <textarea name="descripcion" rows="4" required
                          class="block w-full bg-[#0D1B38] border-slate-600 rounded-xl shadow-sm focus:border-[#4a90e2] focus:ring-[#4a90e2] text-white placeholder-slate-500 transition">{{ old('descripcion') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Precio (S/)</label>
                    <input type="number" name="precio" step="0.01" value="{{ old('precio') }}" required
                           class="block w-full bg-[#0D1B38] border-slate-600 rounded-xl shadow-sm focus:border-[#4a90e2] focus:ring-[#4a90e2] text-white transition py-3">
                </div>
                <div>
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Stock Inicial</label>
                    <input type="number" name="stock" value="{{ old('stock') }}" required
                           class="block w-full bg-[#0D1B38] border-slate-600 rounded-xl shadow-sm focus:border-[#4a90e2] focus:ring-[#4a90e2] text-white transition py-3">
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full inline-flex justify-center py-4 px-6 border border-transparent shadow-xl text-xs font-black rounded-xl text-white bg-[#4a90e2] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4a90e2] transition uppercase tracking-widest">
                    Guardar Nuevo Producto
                </button>
            </div>
        </form>
    </div>
@endsection