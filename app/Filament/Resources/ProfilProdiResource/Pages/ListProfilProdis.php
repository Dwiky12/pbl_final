<?php

namespace App\Filament\Resources\ProfilProdiResource\Pages;

use App\Filament\Resources\ProfilProdiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfilProdis extends ListRecords
{
    protected static string $resource = ProfilProdiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
