<?php

namespace App\Filament\Resources\ProfilProdiResource\Pages;

use App\Filament\Resources\ProfilProdiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProfilProdi extends CreateRecord
{
    protected static string $resource = ProfilProdiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
