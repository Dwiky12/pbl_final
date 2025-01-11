<?php

namespace App\Filament\Resources\KoleksiJurnalResource\Pages;

use App\Filament\Resources\KoleksiJurnalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKoleksiJurnal extends EditRecord
{
    protected static string $resource = KoleksiJurnalResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
