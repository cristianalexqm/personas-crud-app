@extends('Layouts.app')

@section('title', 'Gestión de Personas')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Gestión de Personas</h2>
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Búsqueda -->
    <form action="{{ route('personas.index') }}" method="GET" class="mb-4 flex space-x-4">
        <input type="text" name="buscar" placeholder="Buscar..." 
               class="bg-gray-700 text-white p-2 rounded w-1/3">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
            Buscar
        </button>
    </form>

    <!-- Botón para crear -->
    <a href="{{ route('personas.create') }}"
        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded mb-4 inline-block">
        Crear Nueva Persona
    </a>

    <!-- Tabla -->
    <div class="overflow-x-auto">
        <table class="w-full bg-gray-800 text-white rounded shadow-lg">
            <thead>
                <tr class="bg-gray-700">
                    <th class="p-3 text-left">#</th>
                    <th class="p-3 text-left">Nombre</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Edad</th>
                    <th class="p-3 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr class="border-b border-gray-700">
                        <!-- Numeración Global -->
                        <td class="p-3">
                            {{ ($personas->currentPage() - 1) * $personas->perPage() + $loop->iteration }}
                        </td>
                        <td class="p-3">{{ $persona->nombre }}</td>
                        <td class="p-3">{{ $persona->email }}</td>
                        <td class="p-3">{{ $persona->edad }}</td>
                        <td class="p-3 flex space-x-2">
                            <a href="{{ route('personas.show', $persona->id) }}" 
                               class="bg-gray-500 hover:bg-gray-600 text-white py-1 px-3 rounded">
                                <i class="fas fa-eye"></i> Ver más
                            </a>
                            <a href="{{ route('personas.edit', $persona->id) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded"
                                        onclick="return confirm('¿Estás seguro?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="mt-4">
        {{ $personas->links() }}
    </div>
@endsection
