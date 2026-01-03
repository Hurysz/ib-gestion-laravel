@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#0D1B38] border-slate-600 focus:border-[#4a90e2] focus:ring-[#4a90e2] rounded-lg shadow-sm text-white placeholder-slate-500']) !!}>