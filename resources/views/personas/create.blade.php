@extends('layouts.app')

@section('title', 'Crear Persona')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Crear Nueva Persona</h2>

    <form action="{{ route('personas.store') }}" method="POST" class="bg-gray-800 p-6 rounded shadow-md">
        @csrf

        <!-- Nombre -->
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-400">Nombre</label>
            <input type="text" name="nombre" id="nombre" 
                   class="w-full bg-gray-700 text-white p-2 rounded @error('nombre') border-red-500 @enderror" 
                   value="{{ old('nombre') }}" required>
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
            <input type="email" name="email" id="email" 
                   class="w-full bg-gray-700 text-white p-2 rounded @error('email') border-red-500 @enderror" 
                   value="{{ old('email') }}" required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Edad -->
        <div class="mb-4">
            <label for="edad" class="block text-sm font-medium text-gray-400">Edad</label>
            <input type="number" name="edad" id="edad" 
                   class="w-full bg-gray-700 text-white p-2 rounded @error('edad') border-red-500 @enderror" 
                   value="{{ old('edad') }}" required>
            @error('edad')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botones -->
        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                Guardar
            </button>
            <a href="{{ route('personas.index') }}" 
               class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded inline-block">
                Cancelar
            </a>
        </div>
    </form>
@endsection
