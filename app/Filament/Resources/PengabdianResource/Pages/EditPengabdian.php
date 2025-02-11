<?php

namespace App\Filament\Resources\PengabdianResource\Pages;

use App\Filament\Resources\PengabdianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengabdian extends EditRecord
{
    protected static string $resource = PengabdianResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
