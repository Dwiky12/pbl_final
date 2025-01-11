<?php

namespace App\Filament\Exports;

use App\Models\KoleksiJurnal;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class KoleksiJurnalExporter extends Exporter
{
    protected static ?string $model = KoleksiJurnal::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('prodi.nama_prodi'),
            ExportColumn::make('nama_jurnal'),
            ExportColumn::make('tahun'),
            ExportColumn::make('semester'),
            ExportColumn::make('tingkat.tingkatan'),
            ExportColumn::make('jenis_jurnal'),
            ExportColumn::make('terindex_pada'),
            ExportColumn::make('terindex_lainnya'),
            ExportColumn::make('penerbit'),
            ExportColumn::make('volume'),
            ExportColumn::make('jumlah_eksemplar'),
            ExportColumn::make('deskripsi'),
            ExportColumn::make('status'),
            ExportColumn::make('komentar')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your koleksi jurnal export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}