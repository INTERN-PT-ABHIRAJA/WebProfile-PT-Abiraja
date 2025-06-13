<x-filament::page>
    <div class="grid grid-cols-1 gap-6">
        <x-filament::card>
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Welcome to WebAbhiraja Admin</h1>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Manage your website content, products, and users all in one place.
                    </p>
                </div>
                <div class="hidden md:block">
                    <img src="{{ asset('assets/img/dashboard-illustration.svg') }}" alt="Dashboard" class="h-24 w-auto" onerror="this.src='https://via.placeholder.com/180x100?text=WebAbhiraja'">
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl p-5 text-white shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm opacity-80">Quick Access</p>
                            <h3 class="text-lg font-semibold mt-1">Upload Media</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('filament.admin.resources.media.create') }}" class="block text-center py-1.5 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-md text-white text-sm transition-all duration-200">
                            Upload Now
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-5 text-white shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm opacity-80">Quick Access</p>
                            <h3 class="text-lg font-semibold mt-1">Add Product</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('filament.admin.resources.produks.create') }}" class="block text-center py-1.5 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-md text-white text-sm transition-all duration-200">
                            Create Now
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl p-5 text-white shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm opacity-80">Quick Access</p>
                            <h3 class="text-lg font-semibold mt-1">Add Category</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('filament.admin.resources.kategoris.create') }}" class="block text-center py-1.5 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-md text-white text-sm transition-all duration-200">
                            Create Now
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-5 text-white shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm opacity-80">Quick Access</p>
                            <h3 class="text-lg font-semibold mt-1">Add User</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('filament.admin.resources.users.create') }}" class="block text-center py-1.5 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-md text-white text-sm transition-all duration-200">
                            Create Now
                        </a>
                    </div>
                </div>
            </div>
        </x-filament::card>
        
        <div class="mt-6 text-sm text-center text-gray-500 dark:text-gray-400">
            <p>Today is {{ now()->format('l, F j, Y') }} • WebAbhiraja Admin v1.0</p>
        </div>
    </div>
</x-filament::page>
