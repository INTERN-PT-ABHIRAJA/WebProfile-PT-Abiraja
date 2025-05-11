<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-800">WebAbhiraja Admin</h1>
                <div>
                    <span class="mr-4">{{ Auth::user()->nama }}</span>
                    <form action="{{ route('filament.auth.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="flex-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Welcome to the Admin Dashboard</h2>
                <p class="mb-4">This is a custom admin dashboard because Filament's admin panel isn't loading properly.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-amber-50 p-4 rounded-lg border border-amber-200">
                        <h3 class="font-bold text-lg mb-2">Media Management</h3>
                        <p>Upload and manage media files</p>
                        <a href="#" class="text-amber-600 hover:text-amber-800 mt-2 inline-block">Manage Media →</a>
                    </div>
                    
                    <div class="bg-amber-50 p-4 rounded-lg border border-amber-200">
                        <h3 class="font-bold text-lg mb-2">User Management</h3>
                        <p>Manage user accounts and permissions</p>
                        <a href="#" class="text-amber-600 hover:text-amber-800 mt-2 inline-block">Manage Users →</a>
                    </div>
                    
                    <div class="bg-amber-50 p-4 rounded-lg border border-amber-200">
                        <h3 class="font-bold text-lg mb-2">Anak Perusahaan</h3>
                        <p>Manage company subsidiaries</p>
                        <a href="#" class="text-amber-600 hover:text-amber-800 mt-2 inline-block">Manage Companies →</a>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Footer -->
        <footer class="bg-white shadow mt-8 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-center text-gray-500">© 2025 WebAbhiraja. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
