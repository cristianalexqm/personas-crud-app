<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css') <!-- Incluir estilos (como Tailwind) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Iconos de FontAwesome -->
</head>

<body class="bg-gray-900 text-white flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 h-screen flex flex-col">
        <!-- Logo -->
        <div class="p-4 text-center text-lg font-bold border-b border-gray-700">
            Contoso Company
        </div>

        <!-- Navigation -->
        <nav class="mt-4 flex-grow">
            <ul class="space-y-2">
                <li>
                    <!-- Search Bar -->
                    <input type="text"
                        class="bg-gray-700 text-white rounded-lg px-4 py-2 w-full max-w-xs focus:outline-none"
                        placeholder="Search...">
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-home mr-3"></i> Home
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-briefcase mr-3"></i> Workspace
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-chart-pie mr-3"></i> Reports/Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-users mr-3"></i> Stakeholders
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-chart-line mr-3"></i> Market Analysis
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 hover:bg-gray-700 rounded">
                        <i class="fas fa-box mr-3"></i> Suppliers
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Footer -->
        <footer class="p-4 border-t border-gray-700 text-center text-sm">
            © 2024 WebDashboard
        </footer>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col">
        <!-- Navbar -->
        <header class="bg-gray-800 h-16 flex items-center px-6">

            <!-- Icons -->
            <div class="flex items-center space-x-4 ml-auto">
                <button class="text-gray-400 hover:text-white">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="text-gray-400 hover:text-white">
                    <i class="fas fa-cog"></i>
                </button>
                <img src="https://via.placeholder.com/40" alt="User" class="rounded-full w-10 h-10">
            </div>
        </header>

        <!-- Content -->
        <main class="p-6 flex-grow overflow-y-auto">
            @yield('content') <!-- Aquí va el contenido dinámico -->
            <x-alert type="success" message="Operation completed successfully!" />
            <x-alert type="danger" message="Something went wrong!" />
            <x-alert type="info" message="This is an informational message." />
            <x-alert type="warning" message="This is a warning!" />


        </main>
    </div>

</body>

</html>
