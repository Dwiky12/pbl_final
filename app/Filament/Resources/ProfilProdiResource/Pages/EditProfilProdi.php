<?php

namespace App\Filament\Resources\ProfilProdiResource\Pages;

use App\Filament\Resources\ProfilProdiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfilProdi extends EditRecord
{
    protected static string $resource = ProfilProdiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
