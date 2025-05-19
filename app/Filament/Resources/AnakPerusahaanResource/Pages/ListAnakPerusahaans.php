<?php

namespace App\Filament\Resources\AnakPerusahaanResource\Pages;

use App\Filament\Resources\AnakPerusahaanResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;

class ListAnakPerusahaans extends ListRecords
{
    protected static string $resource = AnakPerusahaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
