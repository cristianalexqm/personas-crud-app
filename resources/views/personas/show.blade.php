@extends('layouts.app')

@section('title', 'Detalles de Persona')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Detalles de Persona</h2>

    <div class="bg-gray-800 p-6 rounded shadow-md">
        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <dt class="text-sm font-semibold text-gray-400">ID:</dt>
                <dd class="text-lg font-medium text-white">{{ $persona->id }}</dd>
            </div>
            <div>
                <dt class="text-sm font-semibold text-gray-400">Nombre:</dt>
                <dd class="text-lg font-medium text-white">{{ $persona->nombre }}</dd>
            </div>
            <div>
                <dt class="text-sm font-semibold text-gray-400">Email:</dt>
                <dd class="text-lg font-medium text-white">{{ $persona->email }}</dd>
            </div>
            <div>
                <dt class="text-sm font-semibold text-gray-400">Edad:</dt>
                <dd class="text-lg font-medium text-white">{{ $persona->edad }}</dd>
            </div>
        </dl>
    </div>

    <div class="mt-6 flex space-x-4">
        <a href="{{ route('personas.index') }}" 
           class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded inline-block">
            Volver
        </a>
        <a href="{{ route('personas.edit', $persona->id) }}" 
           class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded inline-block"
           title="Editar esta persona">
            Editar
        </a>
        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded inline-block"
                    onclick="return confirm('¿Estás seguro de eliminar esta persona?')"
                    title="Eliminar esta persona">
                Eliminar
            </button>
        </form>
    </div>
@endsection
