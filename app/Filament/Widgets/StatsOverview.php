<?php

namespace App\Filament\Widgets;

use App\Models\AnakPerusahaan;
use App\Models\Media;
use App\Models\Produk;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected static ?string $pollingInterval = '15s';
    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        // Get counts with % change calculations
        $userCount = User::count();
        $userLastMonth = User::where('created_at', '<', now()->subMonth())->count();
        $userChange = $userLastMonth > 0 ? (($userCount - $userLastMonth) / $userLastMonth) * 100 : 0;

        $mediaCount = Media::count();
        $mediaLastMonth = Media::where('created_at', '<', now()->subMonth())->count();
        $mediaChange = $mediaLastMonth > 0 ? (($mediaCount - $mediaLastMonth) / $mediaLastMonth) * 100 : 0;

        $produkCount = Produk::count();
        $produkLastMonth = Produk::where('created_at', '<', now()->subMonth())->count();
        $produkChange = $produkLastMonth > 0 ? (($produkCount - $produkLastMonth) / $produkLastMonth) * 100 : 0;

        $subsidiaryCount = AnakPerusahaan::count();
        $subsidiaryLastMonth = AnakPerusahaan::where('created_at', '<', now()->subMonth())->count();
        $subsidiaryChange = $subsidiaryLastMonth > 0 ? (($subsidiaryCount - $subsidiaryLastMonth) / $subsidiaryLastMonth) * 100 : 0;

        return [
            Stat::make('Total Users', $userCount)
                ->description($userChange >= 0 ? '+' . number_format($userChange, 1) . '% growth' : number_format($userChange, 1) . '% decrease')
                ->descriptionIcon($userChange >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($userChange >= 0 ? 'success' : 'danger')
                ->chart([7, 3, 4, 5, 6, 3, 5, 8])
                ->icon('heroicon-o-users'),
            Stat::make('Media Files', $mediaCount)
                ->description($mediaChange >= 0 ? '+' . number_format($mediaChange, 1) . '% growth' : number_format($mediaChange, 1) . '% decrease')
                ->descriptionIcon($mediaChange >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($mediaChange >= 0 ? 'success' : 'danger')
                ->chart([8, 3, 7, 5, 4, 3, 6, 8])
                ->icon('heroicon-o-photo'),
            Stat::make('Products', $produkCount)
                ->description($produkChange >= 0 ? '+' . number_format($produkChange, 1) . '% growth' : number_format($produkChange, 1) . '% decrease')
                ->descriptionIcon($produkChange >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($produkChange >= 0 ? 'success' : 'danger')
                ->chart([5, 3, 7, 8, 3, 5, 6, 4])
                ->icon('heroicon-o-shopping-bag'),
            Stat::make('Subsidiaries', $subsidiaryCount)
                ->description($subsidiaryChange >= 0 ? '+' . number_format($subsidiaryChange, 1) . '% growth' : number_format($subsidiaryChange, 1) . '% decrease')
                ->descriptionIcon($subsidiaryChange >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($subsidiaryChange >= 0 ? 'success' : 'danger')
                ->chart([3, 5, 7, 8, 3, 2, 6, 4])
                ->icon('heroicon-o-building-office-2'),
        ];
    }
}
