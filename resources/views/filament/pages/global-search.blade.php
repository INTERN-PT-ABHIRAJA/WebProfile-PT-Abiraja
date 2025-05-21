<x-filament::page>
    <div class="space-y-6">
        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-xl font-semibold mb-4">Global Search</h2>
                <p class="mb-4 text-gray-600 dark:text-gray-400">Search across your entire WebAbhiraja admin panel.</p>
                
                {{ $this->form }}
                
                <div class="mt-4">
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        Type at least 3 characters to search. Search includes users, media, products, companies, and categories.
                    </p>
                </div>
            </div>
        </div>
        
        @if (!empty($this->searchQuery) && strlen($this->searchQuery) >= 3)
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl overflow-hidden">
                {{ $this->table }}
            </div>
            
            <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                <p>Can't find what you're looking for? Try using more specific terms or check different categories.</p>
            </div>
        @else
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-10 text-center">
                <div class="flex justify-center">
                    <x-filament::icon 
                        icon="heroicon-o-magnifying-glass" 
                        class="h-16 w-16 text-gray-300 dark:text-gray-600" 
                    />
                </div>
                <h3 class="mt-4 text-lg font-medium">Start searching</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Type at least 3 characters in the search box above to find what you're looking for.</p>
            </div>
        @endif
    </div>
</x-filament::page>
