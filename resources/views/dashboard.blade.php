@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="bg-[#162a52] rounded-2xl shadow-xl border border-slate-700 p-8">
        <h1 class="text-3xl font-extrabold text-white">
            ¡Bienvenido al Panel de Control, {{ Auth::user()->name }}!
        </h1>
        <p class="text-slate-400 mt-2 text-lg font-medium">
            Sistema de Gestión de Inventario - Corporación ISGROUP
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-[#162a52] p-8 rounded-2xl shadow-xl border border-slate-700 hover:border-[#4a90e2] transition duration-300">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-bold text-white">Gestión de Productos</h3>
                    <p class="text-sm text-slate-400 mt-1">Administra el stock y precios del inventario.</p>
                </div>
                <div class="bg-[#0D1B38] p-4 rounded-xl border border-slate-700">
                    <svg class="w-6 h-6 text-[#4a90e2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
            <a href="{{ route('productos.index') }}" class="block text-center bg-[#4a90e2] hover:bg-blue-600 text-white py-3 rounded-xl font-black text-xs uppercase tracking-widest transition shadow-lg">
                Ver Inventario Completo
            </a>
        </div>

        <div class="bg-[#162a52] p-8 rounded-2xl border border-slate-700 shadow-xl">
            <h3 class="text-xs font-black text-[#4a90e2] uppercase tracking-[0.3em] mb-6">Estado del Sistema</h3>
            <ul class="space-y-4 text-sm">
                <li class="flex justify-between items-center border-b border-slate-700 pb-2">
                    <span class="text-slate-400 font-medium">Desarrollador:</span>
                    <span class="font-bold text-white">Larsson Fernandez</span>
                </li>
                <li class="flex justify-between items-center border-b border-slate-700 pb-2">
                    <span class="text-slate-400 font-medium">Líder a cargo:</span>
                    <span class="font-bold text-white text-right">Arnie Jeampool Adriano Flores</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-slate-400 font-medium">Módulos:</span>
                    <span class="bg-green-500/10 text-green-400 px-3 py-1 rounded-full text-[10px] font-black border border-green-500/20 uppercase">
                        CRUD + Auth Activos
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection