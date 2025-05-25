@php
    $tableKey = $tableKey ?? '';
    $tableConfig = DashboardConfig::getTables()[$tableKey] ?? null;
    $title = $tableConfig ? (App::isLocale('id') ? ($tableConfig['name_id'] ?? Str::title($tableKey)) : ($tableConfig['name'] ?? Str::title($tableKey))) : 'Table';
@endphp

<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="p-5 border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-lg font-medium text-gray-800">{{ $title }}</h3>
        
        <div class="flex items-center">
            @if(isset($searchTerm))
            <form method="GET" action="{{ route($routePrefix . '.index') }}" class="mr-3">
                <div class="relative">
                    <input type="text" name="search" value="{{ $searchTerm }}" 
                        placeholder="Search..." 
                        class="bg-gray-50 border border-gray-200 rounded-lg py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>
            @endif
            
            @if(isset($createRoute) && $createRoute)
            <a href="{{ $createRoute }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg text-sm font-medium hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add New
            </a>
            @endif
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    @foreach($tableConfig as $column => $config)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">                            @if(isset($config['sortable']) && $config['sortable'])
                                <a href="{{ route($routePrefix . '.index', ['sort' => $column, 'direction' => $sortColumn == $column && $sortDirection == 'asc' ? 'desc' : 'asc', 'search' => $searchTerm]) }}" class="flex items-center">
                                    {{ App::isLocale('id') ? ($config['label_id'] ?? Str::title(str_replace('_', ' ', $column))) : ($config['label'] ?? Str::title(str_replace('_', ' ', $column))) }}
                                    
                                    @if($sortColumn == $column)
                                        @if($sortDirection == 'asc')
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        @endif
                                    @endif
                                </a>
                            @else
                                {{ App::isLocale('id') ? ($config['label_id'] ?? Str::title(str_replace('_', ' ', $column))) : ($config['label'] ?? Str::title(str_replace('_', ' ', $column))) }}
                            @endif
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($items as $item)
                    <tr class="hover:bg-gray-50">
                        @foreach($tableConfig as $column => $config)
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if(isset($config['relation']) && isset($config['relation_column']))
                                    @php
                                        $relationMethod = $config['relation'];
                                        $relationColumn = $config['relation_column'];
                                        $value = optional($item->$relationMethod)->$relationColumn;
                                    @endphp
                                    {{ $value }}
                                @elseif(isset($config['format']) && $config['format'] == 'currency')
                                    Rp{{ number_format($item->$column, 0, ',', '.') }}
                                @elseif(isset($config['thumbnail']) && $config['thumbnail'] && Str::contains($item->$column, ['jpg', 'jpeg', 'png', 'gif']))
                                    <img src="{{ asset('storage/' . $item->$column) }}" alt="Thumbnail" class="h-8 w-auto">
                                @else
                                    @if(isset($config['truncate']))
                                        {{ Str::limit($item->$column, $config['truncate']) }}
                                    @else
                                        {{ $item->$column }}
                                    @endif
                                @endif
                            </td>
                        @endforeach
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <a href="{{ route($routePrefix . '.edit', $item->{$primaryKey}) }}" class="text-indigo-600 hover:text-indigo-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                
                                <form action="{{ route($routePrefix . '.delete', $item->{$primaryKey}) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="p-4 border-t border-gray-200">
        {{ $items->links() }}
    </div>
</div>
