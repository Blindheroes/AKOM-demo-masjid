<?php

namespace App\Filament\Resources\UpcomingEventResource\Pages;

use App\Filament\Resources\UpcomingEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpcomingEvent extends EditRecord
{
    protected static string $resource = UpcomingEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return UpcomingEventResource::getUrl('index');
    }
}
