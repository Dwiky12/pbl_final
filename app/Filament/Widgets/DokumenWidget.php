<?php

namespace App\Filament\Widgets;

use App\Models\Akreditasi;
use App\Models\DokumenKurikulum;
use App\Models\Kebangsaan;
use App\Models\KoleksiJurnal;
use App\Models\Pengabdian;
use App\Models\PengembanganDiri;
use App\Models\ProfilProdi;
use App\Models\Seminar;
use App\Models\Sop;
use App\Models\TenagaAhli;
use App\Models\VisiMisi;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Forms\Components\DatePicker;
use Carbon\Carbon;

class DokumenWidget extends BaseWidget
{
    use InteractsWithPageFilters; // InteractsWithPageFilters will handle the $filters
    protected static ?string $maxHeight = '200px';

    protected function getStats(): array
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;

        // Total Dokumen
        $totalDokumen = $this->getTotalCount([
            Akreditasi::class,
            DokumenKurikulum::class,
            ProfilProdi::class,
            Sop::class,
            VisiMisi::class,
        ], $startDate, $endDate);
        $chartDokumen = $this->getMonthlyData([
            Akreditasi::class,
            DokumenKurikulum::class,
            ProfilProdi::class,
            Sop::class,
            VisiMisi::class,
        ], $startDate, $endDate);

        // Total Kegiatan
        $totalKegiatan = $this->getTotalCount([
            Seminar::class,
            KoleksiJurnal::class,
            TenagaAhli::class,
        ], $startDate, $endDate);
        $chartKegiatan = $this->getMonthlyData([
            Seminar::class,
            KoleksiJurnal::class,
            TenagaAhli::class,
        ], $startDate, $endDate);

        // Total Data Terkait Pegawai
        $totalDataPegawai = $this->getTotalCount([
            Kebangsaan::class,
            Pengabdian::class,
            PengembanganDiri::class,
        ], $startDate, $endDate);
        $chartDataPegawai = $this->getMonthlyData([
            Kebangsaan::class,
            Pengabdian::class,
            PengembanganDiri::class,
        ], $startDate, $endDate);

        return [
            Stat::make('Total Dokumen', $totalDokumen)
                ->description('Total Data Dokumen yang Diinput')
                ->descriptionIcon('heroicon-o-document-duplicate', IconPosition::Before)
                ->chart($chartDokumen)
                ->color($this->getStatColor($chartDokumen)),

            Stat::make('Total Kegiatan', $totalKegiatan)
                ->description('Total Kegiatan yang Diinput')
                ->descriptionIcon('heroicon-o-presentation-chart-line', IconPosition::Before)
                ->chart($chartKegiatan)
                ->color($this->getStatColor($chartKegiatan)),

            Stat::make('Total Data Terkait Pegawai', $totalDataPegawai)
                ->description('Total Data Terkait Pegawai yang Diinput')
                ->descriptionIcon('heroicon-o-academic-cap', IconPosition::Before)
                ->chart($chartDataPegawai)
                ->color($this->getStatColor($chartDataPegawai)),
        ];
    }

    public function filters(): array
    {
        return [
            DatePicker::make('startDate')->label('Start Date'),
            DatePicker::make('endDate')->label('End Date'),
        ];
    }

    private function getMonthlyData(array $models, $startDate = null, $endDate = null): array
    {
        $chartData = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthlyTotal = 0;

            foreach ($models as $modelClass) {
                $query = $modelClass::whereMonth('created_at', $date->month)
                    ->whereYear('created_at', $date->year);

                if ($startDate) {
                    $query->whereDate('created_at', '>=', $startDate);
                }

                if ($endDate) {
                    $query->whereDate('created_at', '<=', $endDate);
                }

                $monthlyTotal += $query->count();
            }

            $chartData[] = $monthlyTotal;
        }

        return $chartData;
    }

    private function getTotalCount(array $models, $startDate = null, $endDate = null): int
    {
        $total = 0;
        foreach ($models as $modelClass) {
            $query = $modelClass::query();

            if ($startDate) {
                $query->whereDate('created_at', '>=', $startDate);
            }

            if ($endDate) {
                $query->whereDate('created_at', '<=', $endDate);
            }

            $total += $query->count();
        }
        return $total;
    }

    private function getStatColor(array $chartData): string
    {
        return end($chartData) >= reset($chartData) ? 'success' : 'danger';
    }
}
