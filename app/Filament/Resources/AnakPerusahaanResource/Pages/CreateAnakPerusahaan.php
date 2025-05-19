<?php

namespace App\Filament\Resources\AnakPerusahaanResource\Pages;

use App\Filament\Resources\AnakPerusahaanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnakPerusahaan extends CreateRecord
{
    protected static string $resource = AnakPerusahaanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
