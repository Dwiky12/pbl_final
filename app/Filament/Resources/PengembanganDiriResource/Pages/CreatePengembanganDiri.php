<?php

namespace App\Filament\Resources\PengembanganDiriResource\Pages;

use App\Filament\Resources\PengembanganDiriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePengembanganDiri extends CreateRecord
{
    protected static string $resource = PengembanganDiriResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
