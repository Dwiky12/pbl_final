<?php

namespace App\Filament\Resources\PengembanganDiriResource\Pages;

use App\Filament\Resources\PengembanganDiriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengembanganDiris extends ListRecords
{
    protected static string $resource = PengembanganDiriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
