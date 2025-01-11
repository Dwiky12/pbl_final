<?php

namespace App\Filament\Exports;

use App\Models\RuangKelas;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class RuangKelasExporter extends Exporter
{
    protected static ?string $model = RuangKelas::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('nama_ruangan'),
            ExportColumn::make('tahun'),
            ExportColumn::make('semester'),
            ExportColumn::make('ruangan.ruangan'),
            ExportColumn::make('luas'),
            ExportColumn::make('daya_tampung'),
            ExportColumn::make('status_pemakaian'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your ruang kelas export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}