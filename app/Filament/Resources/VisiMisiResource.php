<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiResource\Pages;
use App\Filament\Resources\VisiMisiResource\RelationManagers;
use App\Models\VisiMisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_prodi')
                ->relationship('prodi', 'nama_prodi')
            ->columnSpan(2)
            ->required(),
                Forms\Components\Textarea::make('visi')
                ->required(),
                Forms\Components\Textarea::make('misi')
                ->required(),
                Forms\Components\TextInput::make('tahun_pemberlakuan')
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
                ->directory('visimisi')
                ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prodi.nama_prodi'),
                Tables\Columns\TextColumn::make('visi'),
                Tables\Columns\TextColumn::make('misi'),
                Tables\Columns\TextColumn::make('tahun_pemberlakuan'),
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
            'index' => Pages\ListVisiMisis::route('/'),
            'create' => Pages\CreateVisiMisi::route('/create'),
            'edit' => Pages\EditVisiMisi::route('/{record}/edit'),
        ];
    }
}