<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach($actions as $action)
        <a href="{{ $action['url'] }}" class="block transition-all duration-200 hover:translate-y-[-2px]">
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-5 border border-gray-100 dark:border-gray-700 h-full">
                <div class="flex items-center space-x-4">
                    <div class="rounded-lg p-2 
                        @if($action['color'] === 'primary') bg-primary-100 text-primary-600 dark:bg-primary-500/20 dark:text-primary-400
                        @elseif($action['color'] === 'success') bg-success-100 text-success-600 dark:bg-success-500/20 dark:text-success-400
                        @elseif($action['color'] === 'warning') bg-warning-100 text-warning-600 dark:bg-warning-500/20 dark:text-warning-400
                        @elseif($action['color'] === 'danger') bg-danger-100 text-danger-600 dark:bg-danger-500/20 dark:text-danger-400
                        @endif"
                    >
                        <x-filament::icon 
                            :icon="$action['icon']" 
                            class="h-5 w-5" 
                        />
                    </div>
                    
                    <div>
                        <h3 class="font-medium text-gray-900 dark:text-white">{{ $action['label'] }}</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ $action['description'] }}</p>
                    </div>
                </div>
                
                <div class="mt-4 flex items-center justify-end text-sm">
                    <span class="
                        @if($action['color'] === 'primary') text-primary-600 dark:text-primary-400
                        @elseif($action['color'] === 'success') text-success-600 dark:text-success-400
                        @elseif($action['color'] === 'warning') text-warning-600 dark:text-warning-400
                        @elseif($action['color'] === 'danger') text-danger-600 dark:text-danger-400
                        @endif
                        font-medium flex items-center"
                    >
                        Get started
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 ml-1">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </div>
        </a>
    @endforeach
</div>
