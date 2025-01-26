<?php

namespace App\Filament\Resources;

use App\Filament\Exports\SeminarExporter;
use App\Filament\Resources\SeminarResource\Pages;
use App\Filament\Resources\SeminarResource\RelationManagers;
use App\Models\Seminar;
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

class SeminarResource extends Resource
{
    protected static ?string $model = Seminar::class;
    protected static ?string $label = 'Seminar';
    public static function getNavigationLabel(): string
    {
        return 'Seminar';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Daftar Seminar';
    }

    protected static ?string $navigationGroup = 'Kegiatan Kelembagaan';

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_prodi')
                    ->relationship('prodi', 'nama_prodi', fn($query) => $query)
                    ->required(),
                Forms\Components\TextInput::make('nama_kegiatan')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric()
                    ->minValue(2024)
                    ->maxValue(2030),
                Forms\Components\TextInput::make(name: 'semester')
                    ->required(),
                Forms\Components\Select::make('id_tingkat')
                    ->relationship('tingkat', 'tingkatan')
                    ->required(),
                Forms\Components\Select::make('id_kegiatan')
                    ->relationship('kegiatan', 'nama_kegiatan')
                    ->label('Jenis kegiatan')
                    ->required(),
                Forms\Components\Select::make('id_skema')
                    ->relationship('skema', 'skema')
                    ->required(),
                Forms\Components\TextInput::make('tempat')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->required(),
                Forms\Components\TextInput::make('pembicara')
                    ->required(),
                Forms\Components\TextInput::make('asal_pembicara')
                    ->required(),
                Forms\Components\FileUpload::make('file_dokumen')
                    ->directory('seminar')
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
                Tables\Columns\TextColumn::make('nama_kegiatan')
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
                Tables\Columns\TextColumn::make('tingkat.tingkatan')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('kegiatan.nama_kegiatan')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('skema.skema')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('tempat')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('pembicara')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('asal_pembicara')
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
                        ->action(fn(Seminar $record) => $record->update(['status' => Seminar::STATUS_SETUJU]))
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
                        ->action(function (Seminar $record, array $data) {
                            $record->update([
                                'status' => Seminar::STATUS_TOLAK,
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
                ExportAction::make()->exporter(SeminarExporter::class)
                    ->label('Export')
                    ->color('info')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->hidden(auth()->user()->role == "dosen"),
                    ExportBulkAction::make()->exporter(SeminarExporter::class)
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
            'index' => Pages\ListSeminars::route('/'),
            'create' => Pages\CreateSeminar::route('/create'),
            'edit' => Pages\EditSeminar::route('/{record}/edit'),
        ];
    }
}