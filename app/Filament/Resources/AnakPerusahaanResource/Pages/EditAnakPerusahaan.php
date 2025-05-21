<?php

namespace App\Filament\Resources\AnakPerusahaanResource\Pages;

use App\Filament\Resources\AnakPerusahaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnakPerusahaan extends EditRecord
{
    protected static string $resource = AnakPerusahaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
