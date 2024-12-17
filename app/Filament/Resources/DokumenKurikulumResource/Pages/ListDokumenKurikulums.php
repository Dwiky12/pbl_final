<?php

namespace App\Filament\Resources\DokumenKurikulumResource\Pages;

use App\Filament\Resources\DokumenKurikulumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenKurikulums extends ListRecords
{
    protected static string $resource = DokumenKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
