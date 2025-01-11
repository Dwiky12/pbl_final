<?php

namespace App\Filament\Resources\PengembanganDiriResource\Pages;

use App\Filament\Resources\PengembanganDiriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengembanganDiri extends EditRecord
{
    protected static string $resource = PengembanganDiriResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
