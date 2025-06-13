<?php

namespace App\Filament\Resources\ProdukResource\Pages;

use App\Filament\Resources\ProdukResource;
<<<<<<< HEAD
=======
use Filament\Actions;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use Filament\Resources\Pages\CreateRecord;

class CreateProduk extends CreateRecord
{
    protected static string $resource = ProdukResource::class;
<<<<<<< HEAD

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
}
