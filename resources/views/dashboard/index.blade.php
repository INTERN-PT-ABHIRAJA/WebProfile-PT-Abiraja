@extends('layouts.dashboard')

@section('title', 'Dashboard - PT Abhiraja Giovanni Tryamanda')

@section('content')
    @php
        use App\Config\DashboardConfig;
        use Illuminate\Support\Str;
    @endphp
    
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-gray-100">
    <!-- Header Dashboard dengan Branding PT Abhiraja - Enhanced Design -->
    <div class="bg-gradient-to-br from-slate-800 via-slate-700 to-slate-900 rounded-xl shadow-lg p-6 mb-6 relative overflow-hidden">
        <!-- Decorative Pattern -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-400 to-yellow-500 rounded-full opacity-10 transform translate-x-8 -translate-y-8"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-blue-400 to-indigo-400 rounded-full opacity-10 transform -translate-x-6 translate-y-6"></div>
        
        <div class="flex items-center justify-between relative z-10">
            <div class="flex items-center">
                <div class="bg-gradient-to-br from-white to-amber-50 rounded-xl p-3 mr-4 shadow-lg border border-white/30">
                    <svg class="w-7 h-7 text-slate-700" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-white mb-1">PT Abhiraja Management Center</h1>
                    <p class="text-white/90 text-sm font-medium">Multiservice Business Solutions</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="flex items-center bg-gradient-to-r from-amber-400/20 to-yellow-400/20 backdrop-blur-sm px-4 py-2.5 rounded-lg border border-white/20 text-sm">
                    <svg class="w-4 h-4 mr-2 text-amber-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-semibold text-white">{{ date('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Cards dengan tema PT Abhiraja - Compact Design -->
    <div class="stats-grid mb-4">
        @foreach($stats as $key => $count)
            @php
                $icon = '';
                $bgColor = 'bg-slate-50';
                $iconColor = 'text-slate-600';
                $borderColor = 'border-slate-200';
                $name = Str::title($key);
                
                // Color mapping dengan warna PT Abhiraja yang konsisten dan balanced
                $colorMap = [
                    'users' => [
                        'bg' => 'bg-indigo-50', 
                        'icon' => 'text-indigo-700', 
                        'border' => 'border-indigo-200',
                        'name' => 'Tim & Pengguna'
                    ],
                    'categories' => [
                        'bg' => 'bg-amber-50', 
                        'icon' => 'text-amber-700', 
                        'border' => 'border-amber-200',
                        'name' => 'Bidang Layanan'
                    ],
                    'companies' => [
                        'bg' => 'bg-emerald-50', 
                        'icon' => 'text-emerald-700', 
                        'border' => 'border-emerald-200',
                        'name' => 'Anak Perusahaan'
                    ],
                    'products' => [
                        'bg' => 'bg-violet-50', 
                        'icon' => 'text-violet-700', 
                        'border' => 'border-violet-200',
                        'name' => 'Produk & Jasa'
                    ]
                ];
                
                foreach($dashboardTables as $tableKey => $config) {
                    if($tableKey === $key) {
                        $icon = $config['icon'];
                        $name = $config['name'];
                        if(isset($colorMap[$key])) {
                            $bgColor = $colorMap[$key]['bg'];
                            $iconColor = $colorMap[$key]['icon'];
                            $borderColor = $colorMap[$key]['border'];
                            $name = $colorMap[$key]['name'];
                        }
                        break;
                    }
                }
            @endphp
            
            <div class="stats-card {{ $borderColor }} hover:shadow-lg hover:border-opacity-80">
                <div class="flex items-center justify-between h-full">
                    <div class="flex items-center">
                        <div class="rounded-lg p-2.5 {{ $bgColor }} mr-3 border {{ $borderColor }}">
                            <div class="{{ $iconColor }} w-4 h-4">
                                {!! $icon !!}
                            </div>
                        </div>
                        <div>
                            <p class="text-xs text-gray-600 font-medium">{{ $name }}</p>
                            <h3 class="text-lg font-bold text-gray-900">{{ number_format($count) }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="dashboard-grid two-col mb-4">
        <!-- Statistik Visual -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                    Distribusi Data
                </h3>
            </div>
            <div class="card-body">
                <div class="space-y-4">
                    @php
                        $totalStats = array_sum($stats);
                        $statColors = [
                            'users' => ['bg' => 'bg-indigo-500', 'name' => 'Tim & Pengguna'],
                            'categories' => ['bg' => 'bg-amber-500', 'name' => 'Bidang Layanan'],
                            'companies' => ['bg' => 'bg-emerald-500', 'name' => 'Anak Perusahaan'],
                            'products' => ['bg' => 'bg-violet-500', 'name' => 'Produk & Jasa']
                        ];
                    @endphp
                    @foreach($stats as $key => $count)
                        @php
                            $percentage = $totalStats > 0 ? round(($count / $totalStats) * 100, 1) : 0;
                            $color = $statColors[$key] ?? ['bg' => 'bg-gray-500', 'name' => ucfirst($key)];
                        @endphp
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 {{ $color['bg'] }} rounded-full mr-3"></div>
                                <span class="text-sm font-medium text-gray-700">{{ $color['name'] }}</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="{{ $color['bg'] }} h-2 rounded-full transition-all duration-500" style="width: {{ $percentage }}%"></div>
                                </div>
                                <span class="text-sm font-bold text-gray-900 w-12 text-right">{{ $count }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Aksi Cepat -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    Aksi Cepat
                </h3>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    @foreach($dashboardTables as $tableKey => $config)
                        @php
                            $actionColors = [
                                'users' => 'bg-indigo-50 hover:bg-indigo-100 text-indigo-800 border border-indigo-200',
                                'categories' => 'bg-amber-50 hover:bg-amber-100 text-amber-800 border border-amber-200',
                                'companies' => 'bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border border-emerald-200',
                                'products' => 'bg-violet-50 hover:bg-violet-100 text-violet-800 border border-violet-200'
                            ];
                            $colorClass = $actionColors[$tableKey] ?? 'bg-gray-50 hover:bg-gray-100 text-gray-800 border border-gray-200';
                            $actionNames = [
                                'users' => 'Tim Baru',
                                'categories' => 'Bidang Layanan',
                                'companies' => 'Anak Perusahaan',
                                'products' => 'Produk Unggulan'
                            ];
                            $actionName = $actionNames[$tableKey] ?? $config['name_id'];
                        @endphp
                        <a href="{{ route('dashboard.' . $config['route_name'] . '.create') }}" 
                           class="block p-3 {{ $colorClass }} rounded-lg transition-all duration-200 hover:shadow-sm hover:-translate-y-0.5">
                            <div class="flex items-center">
                                <div class="mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium">Tambah {{ $actionName }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities & Business Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <!-- Recent Activities -->
        <div class="lg:col-span-2 dashboard-card">
            <div class="card-header">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                    </svg>
                    Aktivitas Terbaru
                </h3>
            </div>
            <div class="card-body">
                <div class="space-y-3">
                    @if(isset($recentActivities) && count($recentActivities) > 0)
                        @foreach($recentActivities as $activity)
                            <div class="flex items-center p-3 bg-slate-50/80 rounded-lg border border-slate-200/50">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm text-gray-900">{{ $activity['message'] ?? 'Aktivitas baru ditambahkan' }}</p>
                                    <p class="text-xs text-gray-500">{{ $activity['time'] ?? 'Baru saja' }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-8 text-gray-500">
                            <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-sm">Belum ada aktivitas terbaru</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Business Overview -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-slate-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                    Business Highlights
                </h3>
            </div>
            <div class="card-body">
                <div class="space-y-4">
                    <div class="p-3 bg-emerald-50 rounded-lg border border-emerald-200">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-emerald-800">Anak Perusahaan Aktif</span>
                            <span class="text-lg font-bold text-emerald-900">{{ $stats['companies'] ?? 0 }}</span>
                        </div>
                    </div>
                    <div class="p-3 bg-amber-50 rounded-lg border border-amber-200">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-amber-800">Bidang Layanan</span>
                            <span class="text-lg font-bold text-amber-900">{{ $stats['categories'] ?? 0 }}</span>
                        </div>
                    </div>
                    <div class="p-3 bg-indigo-50 rounded-lg border border-indigo-200">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-indigo-800">Produk Unggulan</span>
                            <span class="text-lg font-bold text-indigo-900">{{ $stats['products'] ?? 0 }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- WhatsApp Integration Info -->
            <div class="card-footer">
                <div class="p-3 bg-green-50 rounded-lg border border-green-200">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.281"/>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-green-800">WhatsApp Ready</p>
                            <p class="text-xs text-green-600">Semua produk tersambung ke WhatsApp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('styles')
<style>
    /* CSS-only chart animation - super lightweight */
    .progress-bar {
        animation: progressLoad 1.5s ease-out forwards;
        width: 0%;
    }
    
    @keyframes progressLoad {
        to {
            width: var(--progress-width);
        }
    }
    
    /* Smooth hover effects */
    .card-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush

@push('scripts')
<script>
    // Minimal JavaScript for smooth UI interactions only
    document.addEventListener('DOMContentLoaded', function() {
        // Add smooth loading animation to progress bars
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.setProperty('--progress-width', width);
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.animation = 'progressLoad 1.5s ease-out forwards';
            }, 100);
        });
    });
</script>
@endpush
