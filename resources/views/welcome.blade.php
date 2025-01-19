<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css') <!-- Incluir Tailwind con Vite -->
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
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-home mr-2"></i> Inicio
                    </a>
                </li>
            </ul>
        </nav>
        <footer class="p-4 border-t border-gray-700">
            <p class="text-sm text-center">© {{ date('Y') }} Mi Aplicación</p>
        </footer>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col items-center justify-center">
        <!-- Content -->
        <main class="text-center">
            <h1 class="text-5xl font-bold">Welcome</h1>
        </main>
    </div>

</body>
</html>
