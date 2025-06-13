<?php

namespace App\Filament\Widgets;

use App\Models\Produk;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class ProductChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Products Overview';
    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 'full';
    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
        $products = Produk::selectRaw('DATE_FORMAT(created_at, "%m-%Y") as month, COUNT(*) as count')
            ->where('created_at', '>=', Carbon::now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];

        foreach ($products as $product) {
            $date = Carbon::createFromFormat('m-Y', $product->month);
            $labels[] = $date->format('M Y');
            $data[] = $product->count;
        }

        // If no data, provide default values
        if (count($labels) === 0) {
            for ($i = 5; $i >= 0; $i--) {
                $date = Carbon::now()->subMonths($i);
                $labels[] = $date->format('M Y');
                $data[] = 0;
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Products Added',
                    'data' => $data,
                    'backgroundColor' => 'rgba(124, 58, 237, 0.5)',
                    'borderColor' => 'rgba(124, 58, 237, 1)',
                    'borderWidth' => 2,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
