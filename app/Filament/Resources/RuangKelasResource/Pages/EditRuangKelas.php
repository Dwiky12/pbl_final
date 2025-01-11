<?php

namespace App\Filament\Resources\RuangKelasResource\Pages;

use App\Filament\Resources\RuangKelasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRuangKelas extends EditRecord
{
    protected static string $resource = RuangKelasResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
