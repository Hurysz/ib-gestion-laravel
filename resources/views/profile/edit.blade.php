@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="bg-[#162a52] rounded-2xl shadow-xl border border-slate-700 p-8">
        <h2 class="text-2xl font-black text-white uppercase tracking-widest">Configuración de Cuenta</h2>
        <p class="text-slate-400 mt-1 text-sm font-medium">Administra tu información personal y seguridad.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <div class="p-8 bg-[#162a52] shadow-2xl rounded-2xl border border-slate-700 flex flex-col justify-between">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-8 bg-[#162a52] shadow-2xl rounded-2xl border border-slate-700 flex flex-col justify-between">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="lg:col-span-2 p-8 bg-[#1c3461] shadow-2xl rounded-2xl border border-dashed border-red-500/30">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection