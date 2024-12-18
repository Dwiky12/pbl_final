<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilProdiResource\Pages;
use App\Filament\Resources\ProfilProdiResource\RelationManagers;
use App\Models\ProfilProdi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfilProdiResource extends Resource
{
    protected static ?string $model = ProfilProdi::class;

    protected static ?string $navigationGroup = 'Dokumen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_prodi')
                ->relationship('prodi', 'nama_prodi', fn ($query) => $query)
                ->columnSpan(2)
                ->required(),
                Forms\Components\TextInput::make('tahun_penggunaan')
                ->numeric()
                ->minValue(2024)
                ->maxValue(2030)
                ->required(),
                Forms\Components\TextInput::make('revisi_ke')
                ->required()
                ->numeric()
                ->minValue(0),
                Forms\Components\FileUpload::make('file_dokumen')
                ->directory('profilprodi')
                ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prodi.nama_prodi'),
                Tables\Columns\TextColumn::make('tahun_penggunaan'),
                Tables\Columns\TextColumn::make('revisi_ke'),
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
            'index' => Pages\ListProfilProdis::route('/'),
            'create' => Pages\CreateProfilProdi::route('/create'),
            'edit' => Pages\EditProfilProdi::route('/{record}/edit'),
        ];
    }
}