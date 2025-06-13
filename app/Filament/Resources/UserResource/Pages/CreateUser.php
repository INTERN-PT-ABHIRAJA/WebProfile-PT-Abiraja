<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
<<<<<<< HEAD
=======
use Filament\Actions;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
<<<<<<< HEAD

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
}
