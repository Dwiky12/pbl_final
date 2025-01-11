<?php

namespace App\Filament\Resources\KebangsaanResource\Pages;

use App\Filament\Resources\KebangsaanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKebangsaan extends CreateRecord
{
    protected static string $resource = KebangsaanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
