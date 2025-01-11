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
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class UserChartWidget extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'Chart';
    protected static ?string $maxHeight = '200px';
    protected int|string|array $columnSpan = 'full';

    // No need for the $filters property here anymore.

    protected function getType(): string
    {
        return 'line'; // Jenis chart (line, bar, pie, dll.)
    }

    protected function getData(): array
    {
        // Accessing the filters through the trait
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;

        $labels = [];
        $dokumenData = [];
        $kegiatanData = [];
        $terkaitPegawaiData = [];

        // Iterate over the last 6 months
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $labels[] = $date->format('F Y');

            // Filter based on the date range
            $dokumenData[] = $this->getMonthlyCount([
                Akreditasi::class,
                DokumenKurikulum::class,
                ProfilProdi::class,
                Sop::class,
                VisiMisi::class,
            ], $date, $startDate, $endDate);

            $kegiatanData[] = $this->getMonthlyCount([
                Seminar::class,
                KoleksiJurnal::class,
                TenagaAhli::class,
            ], $date, $startDate, $endDate);

            $terkaitPegawaiData[] = $this->getMonthlyCount([
                Kebangsaan::class,
                Pengabdian::class,
                PengembanganDiri::class,
            ], $date, $startDate, $endDate);
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Total Dokumen',
                    'data' => $dokumenData,
                    'borderColor' => '#4ade80', // Green
                    'backgroundColor' => 'rgba(74, 222, 128, 0.5)',
                ],
                [
                    'label' => 'Total Kegiatan',
                    'data' => $kegiatanData,
                    'borderColor' => '#f87171', // Red
                    'backgroundColor' => 'rgba(248, 113, 113, 0.5)',
                ],
                [
                    'label' => 'Total Data Terkait Pegawai',
                    'data' => $terkaitPegawaiData,
                    'borderColor' => '#4da8ec', // Blue
                    'backgroundColor' => 'rgba(77, 168, 236, 1)',
                ],
            ],
        ];
    }

    private function getMonthlyCount(array $models, Carbon $date, $startDate, $endDate): int
    {
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

        return $monthlyTotal;
    }
}
