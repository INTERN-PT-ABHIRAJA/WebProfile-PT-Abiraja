<?php

namespace App\Filament\Resources\AnakPerusahaanResource\Pages;

use App\Filament\Resources\AnakPerusahaanResource;
<<<<<<< HEAD
=======
use Filament\Actions;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use Filament\Resources\Pages\CreateRecord;

class CreateAnakPerusahaan extends CreateRecord
{
    protected static string $resource = AnakPerusahaanResource::class;
<<<<<<< HEAD

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
}
