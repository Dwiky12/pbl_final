<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DokumenWidget;
use App\Filament\Widgets\UserChartWidget;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        DatePicker::make('startDate')
                            ->columnSpan(1),
                        DatePicker::make('endDate')
                            ->columnSpan(1),
                    ])
                    ->columns(2),
            ]);
    }

    public function widgets(): array
    {
        return [
            DokumenWidget::class => [
                'columnSpan' => 1, // Set to 4 for smaller widgets
            ],
            UserChartWidget::class => [
                'columnSpan' => 1, // Set to 4 for smaller widgets
            ],
        ];
    }
}
