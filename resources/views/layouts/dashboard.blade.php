<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PT ABHIRAJA GIOVANNI TRYAMANDA') }} - Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            transition: all 0.3s ease;
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar bg-white w-64 fixed inset-y-0 z-20 shadow-lg">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="flex items-center justify-center h-16 border-b">
                    <h1 class="text-xl font-bold text-primary-600">PT ABHIRAJA</h1>
                </div>
                  <!-- Menu Items -->
                <nav class="flex-1 overflow-y-auto p-4">
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('dashboard.index') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('dashboard.index') ? 'bg-primary-50 text-primary-600' : 'hover:bg-gray-100' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        @php
                            $dashboardTables = \App\Config\DashboardConfig::getTables();
                        @endphp
                          @foreach($dashboardTables as $tableKey => $tableConfig)
                            @if(isset($tableConfig['permissions']) && in_array(auth()->user()->role, $tableConfig['permissions']))
                                <li>
                                    <a href="{{ route('dashboard.' . $tableConfig['route_name'] . '.index') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('dashboard.' . $tableConfig['route_name'] . '*') ? 'bg-primary-50 text-primary-600' : 'hover:bg-gray-100' }}">
                                        {!! $tableConfig['icon'] !!}
                                        <span>{{ App::isLocale('id') ? $tableConfig['name_id'] : $tableConfig['name'] }}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
                
                <!-- Bottom Section -->
                <div class="p-4 border-t">
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <p class="font-medium">{{ Auth::user()->nama }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-center px-4 py-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 ml-64">
            <!-- Top Bar -->
            <header class="bg-white h-16 shadow-sm flex items-center px-6">
                <button id="toggleSidebar" class="mr-4 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h2 class="text-xl font-semibold">@yield('title', 'Dashboard')</h2>
                <div class="ml-auto flex items-center">
                    <div class="relative">
                        <a href="{{ url('/') }}" target="_blank" class="flex items-center px-3 py-1 text-primary-600 hover:text-primary-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Lihat Website
                        </a>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm">{{ session('error') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>
            
            <!-- Footer -->
            <footer class="bg-white p-4 border-t text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} PT ABHIRAJA GIOVANNI TRYAMANDA. All rights reserved.
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Toggle sidebar on mobile
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        
        if (toggleSidebar) {
            toggleSidebar.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 768) {
                if (!sidebar.contains(e.target) && e.target !== toggleSidebar) {
                    sidebar.classList.remove('open');
                }
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
