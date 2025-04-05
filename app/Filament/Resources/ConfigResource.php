<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Config;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ConfigResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ConfigResource\Pages\EditConfig;
use App\Filament\Resources\ConfigResource\RelationManagers;
use App\Filament\Resources\ConfigResource\Pages\ListConfigs;
use App\Filament\Resources\ConfigResource\Pages\CreateConfig;

class ConfigResource extends Resource
{
    protected static ?string $model = Config::class;
    protected static ?string $navigationGroup = 'Settings';


    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('masque_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('masque_email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('masque_telp')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('masque_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('masque_city')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('masque_maps_link')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\RichEditor::make('masque_maps_embed_maps')
                    ->default(null),

                FileUpload::make('masque_logo')
                    ->label('masque logo')
                    ->image()
                    ->maxSize(1024)
                    ->preserveFilenames()
                    ->directory('config')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_config')
                    ->searchable(),
                Tables\Columns\TextColumn::make('masque_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('masque_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('masque_telp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('masque_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('masque_city')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('masque_logo')
                    ->label('masque logo')
                    ->size(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListConfigs::route('/'),
            // 'create' => Pages\CreateConfig::route('/create'),
            'edit' => Pages\EditConfig::route('/{record}/edit'),
        ];
    }
}
