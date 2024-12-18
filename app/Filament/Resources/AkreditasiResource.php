<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkreditasiResource\Pages;
use App\Filament\Resources\AkreditasiResource\RelationManagers;
use App\Models\Akreditasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AkreditasiResource extends Resource
{
    protected static ?string $model = Akreditasi::class;

    protected static ?string $navigationGroup = 'Dokumen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_prodi')
                ->relationship('prodi', 'nama_prodi', fn ($query) => $query)
                ->required(),
                Forms\Components\TextInput::make('no_sk')
                ->required(),
                Forms\Components\Select::make('id_jenisakreditasi')
                ->relationship('jenisAkreditasi', 'akreditasi')
                ->required(),
                Forms\Components\TextInput::make('nilai_akreditasi')
                ->required()
                ->numeric()
                ->minValue(0),
                Forms\Components\Select::make('id_lembaga')
                ->relationship('lembaga', 'nama_lembaga')
                ->required(),
                Forms\Components\Select::make('id_tingkat')
                ->relationship('tingkat', 'tingkatan')
                ->required(),
                Forms\Components\DatePicker::make('tanggal_mulai')
                ->required(),
                Forms\Components\DatePicker::make('tanggal_berakhir')
                ->required(),
                // Forms\Components\Select::make('status')
                // ->options([
                //     'pending' => 'Pending',
                //     'confirmed' => 'Confirmed',
                //     'rejected' => 'Rejected',
                // ])
                // ->required(),
                Forms\Components\FileUpload::make('file_dokumen')
                ->directory('akreditasi')
                ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prodi.nama_prodi'),
                Tables\Columns\TextColumn::make('no_sk'),
                Tables\Columns\TextColumn::make('jenisAkreditasi.akreditasi'),
                Tables\Columns\TextColumn::make('nilai_akreditasi'),
                Tables\Columns\TextColumn::make('lembaga.nama_lembaga'),
            Tables\Columns\TextColumn::make('tingkat.tingkatan'),
                Tables\Columns\TextColumn::make('tanggal_mulai'),
                Tables\Columns\TextColumn::make('tanggal_berakhir'),
                Tables\Columns\ImageColumn::make('file_dokumen'),
                Tables\Columns\TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
        ])
        ->button()
        ->label('Actions'),
        ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAkreditasis::route('/'),
            'create' => Pages\CreateAkreditasi::route('/create'),
            'edit' => Pages\EditAkreditasi::route('/{record}/edit'),
        ];
    }
}