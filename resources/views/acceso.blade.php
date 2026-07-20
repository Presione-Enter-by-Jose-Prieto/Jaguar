@extends('layouts.auth')

@section('content')
    <div class="w-full sm:w-96 bg-white px-8 py-8">
        <div class="mb-6 text-center">
            <img src="{{ asset('logo.png') }}" alt="" class="mx-auto mb-3 w-16 select-none unselectable" draggable="false">
            <h1 class="text-lg font-semibold text-gray-900">SMEP SENA</h1>
            <p class="mt-1 text-sm text-gray-400">Acceso de usuarios registrados</p>
        </div>
        <form action="" class="flex flex-col gap-4">
            <select name="doc" class="w-full appearance-none border-b border-gray-200 bg-white pb-2 pt-1 text-base text-gray-700 focus:border-gray-900 focus:outline-none">
                <option value="cedula" selected>CC - Cédula de Ciudadanía</option>
                <option value="tarjeta_identidad">TI - Tarjeta de Identidad</option>
                <option value="dni">DNI - Documento Nacional de Identidad</option>
                <option value="passporte">PPT - Pasaporte</option>
            </select>
            <input class="w-full appearance-none border-b border-gray-200 bg-white pb-2 pt-1 text-base text-gray-700 focus:border-[#0A183C] focus:outline-none" type="text" name="documento" placeholder="No. Documento">
            <div class="relative">
                <input class="w-full appearance-none border-b border-gray-200 bg-white pb-2 pt-1 pr-8 text-base text-gray-700 focus:border-[#0A183C] focus:outline-none" type="password" name="password" placeholder="Contraseña" id="password">
                <button type="button" class="absolute inset-y-0 right-0 flex items-center text-gray-400 cursor-pointer mr-2" onclick="togglePassword()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 " id="eyeOpen">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 hidden " id="eyeClosed">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </button>
            </div>
            <script>
                function togglePassword() {
                    const input = document.getElementById('password');
                    const open = document.getElementById('eyeOpen');
                    const closed = document.getElementById('eyeClosed');
                    if (input.type === 'password') {
                        input.type = 'text';
                        open.classList.add('hidden');
                        closed.classList.remove('hidden');
                    } else {
                        input.type = 'password';
                        closed.classList.add('hidden');
                        open.classList.remove('hidden');
                    }
                }
            </script>
            <button class="mt-2 w-full bg-[#0A183C] px-4 py-3 text-sm font-medium uppercase tracking-widest text-white cursor-pointer" type="submit">Ingresar</button>
        </form>
        <div class="mt-6 text-center">
            <a href="" class="text-sm text-gray-400">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
@endsection
