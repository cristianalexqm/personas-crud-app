@extends('layouts.app')

@section('title', 'Lista de Personas')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Lista de Personas</h2>
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <table class="w-full bg-gray-800 text-white rounded shadow-lg">
        <thead>
            <tr class="bg-gray-700">
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">Nombre</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Edad</th>
                <th class="p-3 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr class="border-b border-gray-700">
                    <td class="p-3">{{ $persona->id }}</td>
                    <td class="p-3">{{ $persona->nombre }}</td>
                    <td class="p-3">{{ $persona->email }}</td>
                    <td class="p-3">{{ $persona->edad }}</td>
                    <td class="p-3">
                        <a href="{{ route('personas.edit', $persona->id) }}" class="text-blue-400 hover:underline">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:underline" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
