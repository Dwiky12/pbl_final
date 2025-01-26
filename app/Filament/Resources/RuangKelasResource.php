<?php

namespace App\Filament\Resources;

use App\Filament\Exports\RuangKelasExporter;
use App\Filament\Resources\RuangKelasResource\Pages;
use App\Filament\Resources\RuangKelasResource\RelationManagers;
use App\Models\RuangKelas;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField;

class RuangKelasResource extends Resource
{
    protected static ?string $model = RuangKelas::class;
    public static function getNavigationSort(): int
    {
        return 2;
    }
    protected static ?string $label = 'Ruang Kelas';
    public static function getNavigationLabel(): string
    {
        return 'Ruang Kelas';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Daftar Ruang Kelas';
    }

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_prodi')
                    ->relationship('prodi', 'nama_prodi', fn($query) => $query)
                    ->required(),
                Forms\Components\TextInput::make('nama_ruangan')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric()
                    ->minValue(2024)
                    ->maxValue(2030),
                Forms\Components\TextInput::make('semester')
                    ->required(),
                Forms\Components\Select::make('id_ruangan')
                    ->relationship('ruangan', 'ruangan')
                    ->required(),
                Forms\Components\TextInput::make('luas')
                    ->Label('Luas (m2)')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
                Forms\Components\TextInput::make('daya_tampung')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
                Forms\Components\Select::make('status_pemakaian')
                    ->options([
                        'Prodi Sendiri' => 'Prodi Sendiri',
                        'Dipakai bersama dalam Fakultas' => 'Dipakai bersama dalam Fakultas',
                        'Dipakai bersama dalam Universitas' => 'Dipakai bersama dalam Universitas',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('file_dokumen')
                    ->directory('ruangkelas')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(10240)
                    ->columnSpan(2),
                PdfViewerField::make('file')
                    ->label('View the PDF')
                    ->fileUrl(fn($record) => Storage::url($record->file_dokumen))
                    ->columnSpanFull()
                    ->minHeight('40svh'),
                Forms\Components\Hidden::make('status')
                    ->default(fn() => auth()->user()->role === 'kaprodi' ? 'disetujui' : 'pending'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prodi.nama_prodi')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('nama_ruangan')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('semester')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('ruangan.ruangan')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('luas')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('daya_tampung')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('status_pemakaian')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('file_dokumen')
                    ->formatStateUsing(fn($state) => 'Dokumen.pdf')
                    ->url(fn($record) => asset('storage/' . $record->file_dokumen))
                    ->openUrlInNewTab()
                    ->color('info') // Mengatur warna teks menjadi biru
                    ->extraAttributes(['class' => 'font-bold underline'])
                    ->alignCenter(),
                Tables\Columns\BadgeColumn::make('status')
                    ->alignCenter()
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'disetujui',
                        'danger' => 'ditolak',
                    ])
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            'pending' => 'Pending',
                            'disetujui' => 'Disetujui',
                            'ditolak' => 'Ditolak',
                            default => 'Unknown',
                        };
                    }),
                Tables\Columns\TextColumn::make('komentar')
                    ->sortable()
                    ->searchable()
                    ->alignCenter()
                    ->formatStateUsing(fn($state, $record) => $record->status === 'pending' ? null : $state)
                    ->limit(20),
            ])
            ->filters([
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('created_from'),
                        DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        'pending' => 'Pending',
                        'disetujui' => 'Disetujui',
                        'ditolak' => 'Ditolak',
                    ])
            ], layout: FiltersLayout::Modal)
            ->recordUrl(null)
            ->recordAction(null)
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\ViewAction::make('view_komentar')
                        ->label('Detail Penolakan')
                        ->hidden(fn($record) => $record->status !== 'ditolak')
                        ->form([
                            Forms\Components\TextInput::make('status')
                                ->default(fn($record) => ucfirst($record->status))
                                ->disabled(),
                            Forms\Components\TextArea::make('komentar')
                                ->disabled(),

                        ]),
                    Tables\Actions\EditAction::make()
                        ->visible(fn($record) => auth()->user()->role === 'kaprodi' || auth()->user()->role === 'dosen' && $record->status === 'ditolak'),
                    Tables\Actions\DeleteAction::make()
                        ->hidden(auth()->user()->role == "dosen"),

                    Tables\Actions\Action::make('setuju')
                        ->label('Setuju') // Label for the action
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(fn(RuangKelas $record) => $record->update(['status' => RuangKelas::STATUS_SETUJU]))
                        ->requiresConfirmation()
                        ->disabled(fn($record) => $record->status !== 'pending')
                        ->hidden(auth()->user()->role == "dosen"),
                    Tables\Actions\Action::make('tolak')
                        ->label('Tolak') // Label for the action
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->form([
                            Forms\Components\TextArea::make('komentar')
                                ->label('Komentar')
                                ->required()
                                ->placeholder('Tambah alasan penolakan'),
                        ])
                        ->action(function (RuangKelas $record, array $data) {
                            $record->update([
                                'status' => RuangKelas::STATUS_TOLAK,
                                'komentar' => $data['komentar'],
                            ]);

                        })
                        ->requiresConfirmation()
                        ->disabled(fn($record) => $record->status !== 'pending')
                        ->hidden(auth()->user()->role == "dosen"),
                ])
                    ->button(),
            ])
            ->headerActions([
                ExportAction::make()->exporter(RuangKelasExporter::class)
                    ->label('Export')
                    ->color('info')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->hidden(auth()->user()->role == "dosen"),
                    ExportBulkAction::make()->exporter(RuangKelasExporter::class)
                        ->label('Export')
                        ->color('info')
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRuangKelas::route('/'),
            'create' => Pages\CreateRuangKelas::route('/create'),
            'edit' => Pages\EditRuangKelas::route('/{record}/edit'),
        ];
    }
}