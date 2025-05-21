<div class="p-6 bg-gradient-to-r from-purple-600 to-indigo-700 rounded-xl text-white shadow-xl">
    <div class="flex items-start justify-between">
        <div>
            <h2 class="text-2xl font-bold tracking-tight text-white">Good {{ $timeOfDay }}, {{ $name }}!</h2>
            <p class="mt-2 text-indigo-100">Welcome to WebAbhiraja Admin Panel</p>
        </div>
        
        <div class="hidden md:block w-24 h-24 overflow-hidden rounded-lg">
            <img src="{{ asset('assets/img/admin-avatar.svg') }}" alt="Admin" class="w-full h-full object-cover" 
                onerror="this.src='https://via.placeholder.com/100?text=👋'">
        </div>
    </div>
    
    <div class="mt-6">
        <blockquote class="italic text-indigo-100 text-sm border-l-2 border-indigo-300 pl-3">
            "{{ $quote }}"
        </blockquote>
    </div>
    
    <div class="mt-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <p class="text-xs text-indigo-100">{{ $date }}</p>
        
        <div class="flex items-center gap-2">
            <a href="{{ route('filament.admin.resources.media.create') }}" 
                class="inline-flex items-center justify-center gap-1 rounded-md bg-white bg-opacity-20 hover:bg-opacity-30 py-1 px-3 text-xs font-medium text-white shadow-sm transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3.5 h-3.5">
                    <path d="M5.25 3A2.25 2.25 0 003 5.25v9.5A2.25 2.25 0 005.25 17h9.5A2.25 2.25 0 0017 14.75v-9.5A2.25 2.25 0 0014.75 3h-9.5z" />
                    <path d="M10 8a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0v-1.5h-1.5a.75.75 0 010-1.5h1.5v-1.5A.75.75 0 0110 8z" />
                </svg>
                Upload Media
            </a>
            
            <a href="{{ route('filament.admin.resources.users.index') }}" 
                class="inline-flex items-center justify-center gap-1 rounded-md bg-white bg-opacity-20 hover:bg-opacity-30 py-1 px-3 text-xs font-medium text-white shadow-sm transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3.5 h-3.5">
                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 013.01-3.01.78.78 0 11.442-.358A3.004 3.004 0 007 11.51c-.183.031-.36.067-.537.107a9.277 9.277 0 00-1.144.344.775.775 0 01-.56.051 3.118 3.118 0 00-1.383.307 1.974 1.974 0 00-.862.96 3.12 3.12 0 00-.275.983.777.777 0 01-.401.64 1.978 1.978 0 00-.355.63 2.33 2.33 0 00-.099.795c.007.118.04.37.098.595a18.342 18.342 0 00.358 1.34.78.78 0 01-.097.612A3 3 0 011.49 15.326z" />
                    <path d="M10 12a3 3 0 100-6 3 3 0 000 6z" />
                    <path d="M18 8a2 2 0 11-4 0 2 2 0 014 0zM4.053 8a2 2 0 10.835 3.999.78.78 0 01-.133 1.097 3.003 3.003 0 01-2.496.624 3.12 3.12 0 00-.564.175 1.978 1.978 0 00-.595.463 3.37 3.37 0 00-.48.238 3 3 0 01-.582-1.929.778.778 0 01-.37-.344 3.005 3.005 0 01-.281-.56 3 3 0 012.496-3.999.78.78 0 01.134 1.097A2.001 2.001 0 004.053 8z" />
                    <path d="M14 10a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5h2.5A.75.75 0 0114 10z" />
                </svg>
                Manage Users
            </a>
        </div>
    </div>
</div>
