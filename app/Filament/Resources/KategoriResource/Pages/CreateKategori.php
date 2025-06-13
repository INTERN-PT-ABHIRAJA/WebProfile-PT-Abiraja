<?php

namespace App\Filament\Resources\KategoriResource\Pages;

use App\Filament\Resources\KategoriResource;
<<<<<<< HEAD
=======
use Filament\Actions;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use Filament\Resources\Pages\CreateRecord;

class CreateKategori extends CreateRecord
{
    protected static string $resource = KategoriResource::class;
<<<<<<< HEAD

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
}
