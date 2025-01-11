<?php

namespace App\Filament\Resources\KoleksiJurnalResource\Pages;

use App\Filament\Resources\KoleksiJurnalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKoleksiJurnals extends ListRecords
{
    protected static string $resource = KoleksiJurnalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
