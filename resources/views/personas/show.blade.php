@extends('layouts.app')

@section('title', 'Detalles de Persona')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Detalles de {{ $persona->nombre }}</h2>
    <ul class="bg-gray-800 p-6 rounded shadow-lg">
        <li><strong>ID:</strong> {{ $persona->id }}</li>
        <li><strong>Nombre:</strong> {{ $persona->nombre }}</li>
        <li><strong>Email:</strong> {{ $persona->email }}</li>
        <li><strong>Edad:</strong> {{ $persona->edad }}</li>
    </ul>
    <a href="{{ route('personas.index') }}" class="text-blue-400 hover:underline mt-4 inline-block">Volver a la lista</a>
@endsection
