@extends('layouts.app')

@section('title', 'Crear Persona')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Crear Nueva Persona</h2>
    <form action="{{ route('personas.store') }}" method="POST" class="space-y-4 bg-gray-800 p-6 rounded shadow-lg">
        @csrf
        <div>
            <label for="nombre" class="block font-bold">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="w-full p-2 rounded text-gray-900" value="{{ old('nombre') }}">
            @error('nombre')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email" class="block font-bold">Email:</label>
            <input type="email" name="email" id="email" class="w-full p-2 rounded text-gray-900" value="{{ old('email') }}">
            @error('email')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="edad" class="block font-bold">Edad:</label>
            <input type="number" name="edad" id="edad" class="w-full p-2 rounded text-gray-900" value="{{ old('edad') }}">
            @error('edad')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Guardar</button>
    </form>
@endsection
