<?php

namespace App\Filament\Exports;

use App\Models\Seminar;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class SeminarExporter extends Exporter
{
    protected static ?string $model = Seminar::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('nama_kegiatan'),
            ExportColumn::make('tahun'),
            ExportColumn::make('semester'),
            ExportColumn::make('tingkat.tingkatan'),
            ExportColumn::make('kegiatan.nama_kegiatan'),
            ExportColumn::make('skema.skema'),
            ExportColumn::make('tempat'),
            ExportColumn::make('tanggal_mulai'),
            ExportColumn::make('tanggal_selesai'),
            ExportColumn::make('pembicara'),
            ExportColumn::make('asal_pembicara'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your seminar export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}