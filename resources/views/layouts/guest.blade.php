<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IB CORP - Acceso</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-200 antialiased bg-[#0D1B38]">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/" class="text-3xl font-bold tracking-widest text-white">
                    CORPORACIÓN <span class="text-[#4a90e2]">ISGROUP</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-[#162a52] shadow-2xl overflow-hidden sm:rounded-2xl border border-slate-700">
                {{ $slot }}
            </div>
            
            <p class="mt-6 text-slate-500 text-xs uppercase tracking-widest">
                Sistemas - Control de Seguridad
            </p>
        </div>
    </body>
</html>