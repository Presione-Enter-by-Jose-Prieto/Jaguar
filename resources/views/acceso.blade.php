@extends('layouts.auth')

@section('content')
    <div class="border border-gray-300 p-4 flex flex-col items-center shadow shadow-lg rounded w-100 bg-white">
        <div class="flex flex-row items-center mb-4 justify-start gap-x-4 px-5">
            <img src="{{ asset('logo.png') }}" alt="" class="w-20">
            <div class="text-gray-800">
                <span class="text-xl font-semibold mb-2">Bienvenido a Jaguar</span>  <br>
                <small class="text-sm ">La mejor plataforma para la gestión de tus aprendices</small>
            </div>
        </div>
        <hr class="w-full border-gray-300 mb-6">
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-center text-gray-800">Acceso de usuarios registrados</h1>
        </div>
        <form action="" class="flex flex-col gap-3 w-full mb-4">
            <div class="relative group">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 transition-colors group-focus-within:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75A2.25 2.25 0 0 1 6 4.5h12a2.25 2.25 0 0 1 2.25 2.25v10.5A2.25 2.25 0 0 1 18 19.5H6a2.25 2.25 0 0 1-2.25-2.25V6.75Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 9.75h.008v.008H7.5V9.75Zm0 3h.008v.008H7.5v-.008Zm0 3h.008v.008H7.5v-.008Zm3-6h6m-6 3h6m-6 3h6" />
                    </svg>
                </span>
                <select name="doc" id="" class="w-full appearance-none rounded border border-gray-300 bg-white py-2 pr-4 pl-11 text-gray-700 transition focus:border-green-600 focus:outline-none">
                    <option value="" disabled selected>Seleccionar documento</option>
                    <option value="cedula">CC</option>
                    <option value="tarjeta_identidad">TI</option>
                    <option value="dni">DNI</option>
                    <option value="passporte">PPT</option>
                </select>
            </div>
            <div class="relative group">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 transition-colors group-focus-within:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.118a7.5 7.5 0 0 1 15 0A17.933 17.933 0 0 1 12 21.75a17.933 17.933 0 0 1-7.5-1.632Z" />
                    </svg>
                </span>
                <input class="w-full rounded border border-gray-300 py-2 pr-4 pl-11 text-gray-700 transition focus:border-green-700 focus:outline-none" type="text" name="documento" placeholder="No. Documento">
            </div>
            <div class="relative group">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 transition-colors group-focus-within:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0 1 19.5 12.75v6A2.25 2.25 0 0 1 17.25 21h-10.5A2.25 2.25 0 0 1 4.5 18.75v-6a2.25 2.25 0 0 1 2.25-2.25Z" />
                    </svg>
                </span>
                <input class="w-full rounded border border-gray-300 py-2 pr-4 pl-11 text-gray-700 transition focus:border-green-700 focus:outline-none" type="password" name="password" placeholder="Password">
            </div>
            <button class="mt-2 cursor-pointer rounded bg-green-800 px-4 py-2 text-white transition hover:bg-green-700" type="submit">Login</button>
        </form>
        <div class="mt-4 text-center">
            <a href="" class="text-gray-600 hover:text-green-600 text-sm">¿Olvidaste tu contraseña?</a>
            <p class="text-gray-500 text-sm">Todos los derechos reservados Jaguar 2026 </p>
        </div>
    </div>
@endsection
