<?php

namespace App\Filament\Resources\KebangsaanResource\Pages;

use App\Filament\Resources\KebangsaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKebangsaans extends ListRecords
{
    protected static string $resource = KebangsaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
