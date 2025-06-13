<?php

namespace App\Filament\Widgets;

use App\Models\AnakPerusahaan;
use App\Models\kategori;
use App\Models\Produk;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;

class BusinessOverviewWidget extends ChartWidget
{
    protected static ?string $heading = 'Business Overview';
    protected static ?int $sort = 5;
    protected int|string|array $columnSpan = 'full';

    public ?string $filter = 'month';

    protected function getFilters(): ?array
    {
        return [
            'month' => 'Last Month',
            'week' => 'Last Week',
            'year' => 'This Year',
            'all' => 'All Time',
        ];
    }

    protected function getData(): array
    {
        $categories = kategori::withCount('anakPerusahaan')->get();

        $labels = $categories->pluck('nama_kategori')->toArray();
        $companyCounts = $categories->pluck('anak_perusahaan_count')->toArray();

        // Calculate products per category
        $productCounts = [];
        foreach ($categories as $category) {
            $count = 0;
            foreach ($category->anakPerusahaan as $company) {
                $count += $company->produk()->count();
            }
            $productCounts[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Companies',
                    'data' => $companyCounts,
                    'backgroundColor' => 'rgba(124, 58, 237, 0.7)',
                ],
                [
                    'label' => 'Products',
                    'data' => $productCounts,
                    'backgroundColor' => 'rgba(16, 185, 129, 0.7)',
                ]
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
