<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenKurikulumResource\Pages;
use App\Filament\Resources\DokumenKurikulumResource\RelationManagers;
use App\Models\DokumenKurikulum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumenKurikulumResource extends Resource
{
    protected static ?string $model = DokumenKurikulum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_prodi')
                ->relationship('prodi', 'nama_prodi')
                ->columnSpan(2)
                ->required(),
                Forms\Components\TextInput::make('nama_kurikulum')
                ->required(),
                Forms\Components\TextInput::make('tahun')
                ->required()
                ->numeric()
                ->minValue(2024)
                ->maxValue(2030),
                Forms\Components\TextInput::make('semester')
                ->required(),
                Forms\Components\TextInput::make('revisi_ke')
                ->required()
                ->numeric()
                ->minValue(0),
                Forms\Components\FileUpload::make('file_dokumen')
                ->directory('dokumenkurikulum')
                ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prodi.nama_prodi'),
                Tables\Columns\TextColumn::make('nama_kurikulum'),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('semester'),
                Tables\Columns\TextColumn::make('revisi_ke'),
                Tables\Columns\ImageColumn::make('file_dokumen'),
                Tables\Columns\TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDokumenKurikulums::route('/'),
            'create' => Pages\CreateDokumenKurikulum::route('/create'),
            'edit' => Pages\EditDokumenKurikulum::route('/{record}/edit'),
        ];
    }
}