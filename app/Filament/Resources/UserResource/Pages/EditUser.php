<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
<<<<<<< HEAD
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;
=======
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
<<<<<<< HEAD

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
}
