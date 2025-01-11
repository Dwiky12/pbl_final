<?php

namespace App\Filament\Exports;

use App\Models\Kebangsaan;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class KebangsaanExporter extends Exporter
{
    protected static ?string $model = Kebangsaan::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('kategori.nama_kategori'),
            ExportColumn::make('tingkat.tingkatan'),
            ExportColumn::make('nama_kegiatan'),
            ExportColumn::make('tahun'),
            ExportColumn::make('url_penyelenggara'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your kebangsaan export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}