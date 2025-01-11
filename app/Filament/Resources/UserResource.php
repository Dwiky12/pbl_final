<?php

namespace App\Filament\Resources;

use App\Filament\Exports\UserExporter;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules;


class UserResource extends Resource
{
    protected static ?string $model = User::class;
    public static function getNavigationSort(): int
    {
        return 1; // Semakin kecil angkanya, semakin di atas posisinya
    }

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function canAccess(): bool
    {
        return Auth()->user()->role === 'kaprodi';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->required(),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(fn($get) => empty($get('id')))
                    ->minLength(8),
                Forms\Components\TextInput::make('konfirmasi_password')
                    ->label('Konfirmasi Password')
                    ->password()
                    ->required(fn($get) => empty($get('id')))
                    ->same('password')
                    ->minLength(8),
                Forms\Components\Select::make('role')
                    ->options([
                        'dosen' => 'Dosen',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('email')
                    ->limit(20)
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('role')
                    ->sortable()
                    ->searchable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->limit(20)
                    ->sortable()
                    ->label('Nomor HP')
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->limit(20)
                    ->sortable()
                    ->label('Jenis Kelamin')
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('alamat')
                    ->sortable()
                    ->limit(20)
                    ->label('Alamat')
                    ->alignCenter(),
                Tables\Columns\ImageColumn::make('avatar_url')
                    ->label('Avatar')
                    ->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->recordUrl(null)
            ->recordAction(null)
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make('view_data')
                        ->form([
                            Grid::make(2)
                                ->schema([
                                    Forms\Components\TextInput::make('name')
                                        ->disabled(),
                                    Forms\Components\TextInput::make('email')
                                        ->disabled(),
                                    Forms\Components\TextInput::make('role')
                                        ->disabled(),
                                    Forms\Components\TextInput::make('custom_fields.no_hp')
                                        ->disabled(),
                                    Forms\Components\TextInput::make('custom_fields.jenis_kelamin')
                                        ->disabled(),
                                    Forms\Components\TextInput::make('custom_fields.alamat')
                                        ->disabled(),
                                    Forms\Components\FileUpload::make('avatar_url')
                                        ->columnSpan(2)
                                        ->visible(fn($get) => !empty($get('avatar_url')))
                                        ->disabled(),
                                ]),
                        ]),
                    Tables\Actions\EditAction::make()
                        ->visible(fn($record) => auth()->user()->role === ''),
                    Tables\Actions\DeleteAction::make(),
                ])
                    ->button()
                    ->label('Actions'),
            ])
            ->headerActions([
                ExportAction::make()->exporter(UserExporter::class)
                    ->label('Export')
                    ->color('info')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()->exporter(UserExporter::class)
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}