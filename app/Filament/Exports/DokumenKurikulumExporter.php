<?php

namespace App\Filament\Exports;

use App\Models\DokumenKurikulum;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class DokumenKurikulumExporter extends Exporter
{
    protected static ?string $model = DokumenKurikulum::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('nama_kurikulum'),
            ExportColumn::make('tahun_pemberlakuan'),
            ExportColumn::make('semester'),
            ExportColumn::make('revisi_ke'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your dokumen kurikulum export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}