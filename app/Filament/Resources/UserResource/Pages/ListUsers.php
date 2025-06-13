<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
<<<<<<< HEAD
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
=======
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
