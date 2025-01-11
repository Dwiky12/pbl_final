<?php

namespace App\Filament\Exports;

use App\Models\TenagaAhli;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class TenagaAhliExporter extends Exporter
{
    protected static ?string $model = TenagaAhli::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('asal_instansi'),
            ExportColumn::make('nama_ahli'),
            ExportColumn::make('keahlian'),
            ExportColumn::make('tanggal_mulai'),
            ExportColumn::make('tanggal_berakhir'),
            ExportColumn::make('kegiatan'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your tenaga ahli export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}