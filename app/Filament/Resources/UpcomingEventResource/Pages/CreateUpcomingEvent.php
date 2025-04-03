<?php

namespace App\Filament\Resources\UpcomingEventResource\Pages;

use App\Filament\Resources\UpcomingEventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUpcomingEvent extends CreateRecord
{
    protected static string $resource = UpcomingEventResource::class;
    // get redirect url after create
    protected function getRedirectUrl(): string
    {
        return UpcomingEventResource::getUrl('index');
    }
}
