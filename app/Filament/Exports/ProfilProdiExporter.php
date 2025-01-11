<?php

namespace App\Filament\Exports;

use App\Models\ProfilProdi;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class ProfilProdiExporter extends Exporter
{
    protected static ?string $model = ProfilProdi::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('tahun_penggunaan'),
            ExportColumn::make('revisi_ke'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your profil prodi export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}