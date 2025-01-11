<?php

namespace App\Filament\Resources\TenagaAhliResource\Pages;

use App\Filament\Resources\TenagaAhliResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTenagaAhli extends CreateRecord
{
    protected static string $resource = TenagaAhliResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
