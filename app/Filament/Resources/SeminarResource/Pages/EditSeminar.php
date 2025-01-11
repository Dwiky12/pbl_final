<?php

namespace App\Filament\Resources\SeminarResource\Pages;

use App\Filament\Resources\SeminarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeminar extends EditRecord
{
    protected static string $resource = SeminarResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
