@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    @php
        use App\Config\DashboardConfig;
        use Illuminate\Support\Str;
    @endphp
    
    <h1 class="text-2xl font-semibold mb-6">Welcome to the Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @foreach($stats as $key => $count)
            @php
                $icon = '';
                $color = 'primary';
                $name = Str::title($key);
                
                foreach($dashboardTables as $tableKey => $config) {
                    if($tableKey === $key) {
                        $icon = $config['icon'];
                        $color = $config['color'];
                        $name = $config['name'];
                        break;
                    }
                }
            @endphp
            
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="rounded-full p-3 bg-{{ $color }}-100 mr-4">
                        {!! $icon !!}
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total {{ $name }}</p>
                        <h3 class="text-xl font-semibold">{{ $count }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Grafik Kategori -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Distribusi Anak Perusahaan per Kategori</h3>
            <canvas id="categoryChart" height="200"></canvas>
        </div>
        
        <!-- Quick Links -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($dashboardTables as $tableKey => $config)
                    <a href="{{ route('dashboard.' . $config['route_name'] . '.create') }}" class="block p-4 bg-{{ $config['color'] }}-50 rounded-lg hover:bg-{{ $config['color'] }}-100 transition-colors">
                        <div class="flex items-center">
                            <div class="mr-3 text-{{ $config['color'] }}-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Tambah {{ $config['name_id'] }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Chart for Categories
        const categoryData = {
            labels: @json($categoryStats['labels']),
            datasets: [{
                label: 'Jumlah Anak Perusahaan',
                data: @json($categoryStats['data']),
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 205, 86, 0.8)',
                ],
                borderColor: [
                    'rgb(54, 162, 235)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)',
                ],
                borderWidth: 1
            }]
        };

        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'doughnut',
            data: categoryData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    });
</script>
@endpush
