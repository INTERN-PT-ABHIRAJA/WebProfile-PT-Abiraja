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
                        'abhiraja': {
                            'primary': '#0d4e49',
                            'secondary': '#4c956c', 
                            'accent': '#ffd500',
                            'dark': '#1a2f3d'
                        },
                        primary: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0d4e49',
                            800: '#134e4a',
                            900: '#042f2e',
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
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        }
        .sidebar {
            transition: all 0.2s ease;
            background: linear-gradient(180deg, #1e293b 0%, #334155 30%, #475569 70%, #64748b 100%);
            border-right: 1px solid #e2e8f0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.08);
        }
        
        /* Sidebar Navigation Links */
        .sidebar-nav-link {
            color: #e2e8f0;
            transition: all 0.2s ease;
            border-radius: 8px;
            margin: 2px 8px;
            font-weight: 500;
        }
        
        .sidebar-nav-link:hover {
            background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);
            color: #ffffff;
            transform: translateX(3px);
            box-shadow: 0 3px 8px rgba(245, 158, 11, 0.25);
        }
        
        .sidebar-nav-link.active {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: #ffffff;
            box-shadow: 0 3px 8px rgba(59, 130, 246, 0.3);
            font-weight: 600;
        }
        
        /* Sidebar Brand */
        .sidebar-brand {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Sidebar Section Headers */
        .sidebar-section-header {
            color: #cbd5e1;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin: 16px 16px 8px 16px;
            border-bottom: 1px solid #475569;
            padding-bottom: 4px;
        }
        
        /* Sidebar Icons */
        .sidebar-icon {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            color: inherit;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.open {
                transform: translateX(0);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            }
        }
        
        .main-content {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }
        
        /* Top Bar Enhancement */
        .top-bar {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        /* User Dropdown */
        .user-dropdown {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 6px 12px;
            transition: all 0.2s ease;
        }
        
        .user-dropdown:hover {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border-color: #0d9488;
            transform: translateY(-1px);
            box-shadow: 0 3px 8px rgba(13, 148, 136, 0.15);
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-slate-50 text-gray-800">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar w-64 fixed inset-y-0 z-20 shadow-xl">
            <div class="flex flex-col h-full">
                <!-- Sidebar Header/Brand -->
                <div class="sidebar-brand p-6 flex items-center">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-orange-500 rounded-lg flex items-center justify-center mr-3 shadow-md border border-amber-300/30">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-white">PT Abhiraja</h2>
                            <p class="text-sm text-slate-200">Management Center</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-2 py-4 space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard.index') }}" class="sidebar-nav-link flex items-center px-4 py-3 text-sm font-medium {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                        <svg class="sidebar-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                        Dashboard
                    </a>

                    <!-- Section Header -->
                    <div class="sidebar-section-header">
                        Manajemen Data
                    </div>

                    @php
                        $dashboardTables = \App\Config\DashboardConfig::getTables();
                    @endphp
                    @foreach($dashboardTables as $tableKey => $tableConfig)
                        @if(isset($tableConfig['permissions']) && in_array(auth()->user()->role, $tableConfig['permissions']))
                            <a href="{{ route('dashboard.' . $tableConfig['route_name'] . '.index') }}" class="sidebar-nav-link flex items-center px-4 py-3 text-sm font-medium {{ request()->routeIs('dashboard.' . $tableConfig['route_name'] . '*') ? 'active' : '' }}">
                                <div class="sidebar-icon">
                                    {!! $tableConfig['icon'] !!}
                                </div>
                                {{ App::isLocale('id') ? $tableConfig['name_id'] : $tableConfig['name'] }}
                            </a>
                        @endif
                    @endforeach

                    <!-- Section Header -->
                    <div class="sidebar-section-header">
                        Konten & Media
                    </div>

                    <!-- Media (if exists) -->
                    @if(Route::has('dashboard.media.index'))
                    <a href="{{ route('dashboard.media.index') }}" class="sidebar-nav-link flex items-center px-4 py-3 text-sm font-medium {{ request()->routeIs('dashboard.media.*') ? 'active' : '' }}">
                        <svg class="sidebar-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                        </svg>
                        Media Files
                    </a>
                    @endif
                </nav>

                    <!-- User Profile Section -->
                <div class="px-4 py-4 border-t border-slate-500/50">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-br from-slate-400 to-slate-500 rounded-full flex items-center justify-center shadow-md">
                            <span class="text-white text-sm font-bold">{{ substr(auth()->user()->name ?? 'Admin', 0, 1) }}</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-slate-200">{{ auth()->user()->name ?? 'Administrator' }}</p>
                            <p class="text-xs text-slate-400">{{ auth()->user()->email ?? 'admin@abhiraja.com' }}</p>
                        </div>
                    </div>
                    
                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}" class="mt-3">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-center px-3 py-2 text-sm bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
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
            <header class="top-bar h-16 shadow-sm flex items-center px-6">
                <button id="toggleSidebar" class="mr-4 md:hidden text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                
                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h2>
                </div>
                
                <div class="ml-auto flex items-center space-x-4">
                    <!-- Visit Website Link -->
                    <a href="{{ url('/') }}" target="_blank" class="user-dropdown flex items-center text-sm font-medium text-gray-700 hover:text-emerald-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        Lihat Website
                    </a>
                    
                    <!-- User Info -->
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full flex items-center justify-center mr-3 shadow-md">
                            <span class="text-white text-sm font-bold">{{ substr(auth()->user()->name ?? 'Admin', 0, 1) }}</span>
                        </div>
                        <div class="hidden md:block">
                            <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name ?? 'Administrator' }}</p>
                            <p class="text-xs text-gray-500">{{ date('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-4">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
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
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
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
            <footer class="bg-gradient-to-r from-slate-50 to-gray-50 p-4 border-t border-gray-200 text-center">
                <div class="flex items-center justify-center text-sm text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    &copy; {{ date('Y') }} PT ABHIRAJA GIOVANNI TRYAMANDA. All rights reserved.
                </div>
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
