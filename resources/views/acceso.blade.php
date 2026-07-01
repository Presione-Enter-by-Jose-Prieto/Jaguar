@extends('layouts.auth')

@section('content')
    <div class="w-96 bg-white px-8 py-8">
        <div class="mb-6 text-center">
            <img src="{{ asset('logo.png') }}" alt="" class="mx-auto mb-3 w-16">
            <h1 class="text-lg font-semibold text-gray-900">Jaguar SENA</h1>
            <p class="mt-1 text-sm text-gray-400">Acceso de usuarios registrados</p>
        </div>
        <form action="" class="flex flex-col gap-4">
            <select name="doc" class="w-full appearance-none border-b border-gray-200 bg-white pb-2 pt-1 text-base text-gray-700 focus:border-gray-900 focus:outline-none">
                <option value="" disabled selected>Seleccionar documento</option>
                <option value="cedula">CC</option>
                <option value="tarjeta_identidad">TI</option>
                <option value="dni">DNI</option>
                <option value="passporte">PPT</option>
            </select>
            <input class="w-full appearance-none border-b border-gray-200 bg-white pb-2 pt-1 text-base text-gray-700 focus:border-gray-900 focus:outline-none" type="text" name="documento" placeholder="No. Documento">
            <input class="w-full appearance-none border-b border-gray-200 bg-white pb-2 pt-1 text-base text-gray-700 focus:border-gray-900 focus:outline-none" type="password" name="password" placeholder="Contraseña">
            <button class="mt-2 w-full bg-gray-900 px-4 py-3 text-sm font-medium uppercase tracking-widest text-white" type="submit">Ingresar</button>
        </form>
        <div class="mt-6 text-center">
            <a href="" class="text-sm text-gray-400">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
@endsection
