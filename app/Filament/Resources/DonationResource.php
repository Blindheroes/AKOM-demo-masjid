<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Donation;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\DonationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DonationResource\RelationManagers;
use App\Filament\Resources\DonationResource\Pages\EditDonation;
use App\Filament\Resources\DonationResource\Pages\ListDonations;
use App\Filament\Resources\DonationResource\Pages\CreateDonation;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $typeOptions = Donation::getType();
        return $form->schema([
            Section::make('Donation')->schema([
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->minValue(10000)
                    ->reactive()
                    ->placeholder('Minimal Rp 10.000'),

                Forms\Components\Select::make('type')
                    ->options($typeOptions)
                    ->required()
                    ->placeholder('Pilih jenis donasi')
                    ->default('infaq'),

                Forms\Components\Toggle::make('anonymous')
                    ->label('Donate anonymously')
                    ->reactive()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('name', $state ? 'Anonymous' : '');
                        $set('email', $state ? null : '');
                        $set('phone', $state ? null : '');
                    }),

                Forms\Components\Group::make()
                    ->hidden(fn(callable $get) => $get('anonymous'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->placeholder('Masukkan nama')
                            ->reactive()
                            ->minLength(3)->default('Anonymous'),

                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->placeholder('Masukkan email')
                            ->reactive(),

                        Forms\Components\TextInput::make('phone')
                            ->required()
                            ->placeholder('Masukkan nomor telepon')
                            ->reactive(),
                    ]),

                Forms\Components\Textarea::make('message')
                    ->placeholder('Tulis pesan untuk penerima donasi (opsional)'),

                Forms\Components\Select::make('payment_method')
                    ->options([
                        'qris' => 'QRIS',
                        'bank_transfer' => 'Bank Transfer',
                    ])
                    ->default('qris')
                    ->required(),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([])
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
            'index' => Pages\ListDonations::route('/'),
            'create' => Pages\CreateDonation::route('/create'),
            'edit' => Pages\EditDonation::route('/{record}/edit'),
            'payment' => Pages\Payment::route('/{record}/payment'),
        ];
    }
}
