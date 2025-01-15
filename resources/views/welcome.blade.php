<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    @vite('resources/css/app.css') <!-- Incluir Tailwind con Vite -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Opcional: Iconos -->
</head>
<body class="bg-gray-900 text-white flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 h-screen flex flex-col">
        <div class="p-4 text-center text-lg font-bold border-b border-gray-700">
            Mi Aplicación
        </div>
        <nav class="mt-4 flex-grow">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('personas.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-home mr-2"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('personas.create') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-user-plus mr-2"></i> Crear Persona
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-chart-line mr-2"></i> Reportes
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-cog mr-2"></i> Configuración
                    </a>
                </li>
            </ul>
        </nav>
        <footer class="p-4 border-t border-gray-700">
            <p class="text-sm text-center">© {{ date('Y') }} Mi Aplicación</p>
        </footer>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col">
        <!-- Navbar -->
        <header class="bg-gray-800 h-16 flex items-center px-6">
            <h1 class="text-lg font-bold flex-grow">@yield('title', 'Mi Aplicación')</h1>
            <div class="space-x-4">
                <button class="text-gray-400 hover:text-white">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="text-gray-400 hover:text-white">
                    <i class="fas fa-user-circle"></i>
                </button>
            </div>
        </header>

        <!-- Content -->
        <main class="p-6 flex-grow overflow-y-auto">
            @yield('content')
        </main>
    </div>

</body>
</html>
