<?php

namespace App\Filament\Resources\DokumenKurikulumResource\Pages;

use App\Filament\Resources\DokumenKurikulumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenKurikulum extends EditRecord
{
    protected static string $resource = DokumenKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
