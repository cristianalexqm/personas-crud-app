@extends('layouts.app')

@section('title', 'Editar Persona')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Editar Persona</h2>

    <form action="{{ route('personas.update', $persona->id) }}" method="POST" class="bg-gray-800 p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="nombre" class="text-sm font-semibold text-gray-400">Nombre</label>
                <input type="text" name="nombre" id="nombre" 
                       class="w-full bg-gray-700 text-white p-2 rounded" 
                       value="{{ old('nombre', $persona->nombre) }}" required>
            </div>
            <div>
                <label for="email" class="text-sm font-semibold text-gray-400">Email</label>
                <input type="email" name="email" id="email" 
                       class="w-full bg-gray-700 text-white p-2 rounded" 
                       value="{{ old('email', $persona->email) }}" required>
            </div>
            <div>
                <label for="edad" class="text-sm font-semibold text-gray-400">Edad</label>
                <input type="number" name="edad" id="edad" 
                       class="w-full bg-gray-700 text-white p-2 rounded" 
                       value="{{ old('edad', $persona->edad) }}" required>
            </div>
        </dl>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                Actualizar
            </button>
            <a href="{{ route('personas.show', $persona->id) }}"  
               class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded inline-block">
                Volver
            </a>
        </div>
    </form>
@endsection
