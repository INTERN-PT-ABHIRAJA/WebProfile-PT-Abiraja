<?php

namespace App\Filament\Resources\KategoriResource\Pages;

use App\Filament\Resources\KategoriResource;
<<<<<<< HEAD
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
=======
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

class ListKategoris extends ListRecords
{
    protected static string $resource = KategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
