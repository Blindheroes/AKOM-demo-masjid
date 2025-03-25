<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\UpcomingEvent;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UpcomingEventResource\Pages;
use App\Filament\Resources\UpcomingEventResource\RelationManagers;
use App\Filament\Resources\UpcomingEventResource\Pages\EditUpcomingEvent;
use App\Filament\Resources\UpcomingEventResource\Pages\ListUpcomingEvents;
use App\Filament\Resources\UpcomingEventResource\Pages\CreateUpcomingEvent;

class UpcomingEventResource extends Resource
{
    protected static ?string $model = UpcomingEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Upcoming Event Information')->columns(1)->schema([


                    Forms\Components\FileUpload::make('image')
                        ->label('Thumbnail')
                        ->image(),
                    Forms\Components\DateTimePicker::make('date')
                        ->label('Date')
                        ->required(),
                    Forms\Components\TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    Forms\Components\RichEditor::make('content')
                        ->label('Content')
                        ->required(),
                ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('Thumnail'),
                TextColumn::make('id_event')
                    ->label('ID Event')
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Date')->sortable()
                    ->searchable(),
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),


            ])
            ->filters([
                Tables\Filters\Filter::make('past_events')
                    ->label('Past Events')
                    ->query(fn(Builder $query) => $query->where('date', '<', now())),
                Tables\Filters\Filter::make('upcoming_events')
                    ->label('Upcoming Events')
                    ->query(fn(Builder $query) => $query->where('date', '>=', now())),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListUpcomingEvents::route('/'),
            'create' => Pages\CreateUpcomingEvent::route('/create'),
            'edit' => Pages\EditUpcomingEvent::route('/{record}/edit'),
        ];
    }
}
