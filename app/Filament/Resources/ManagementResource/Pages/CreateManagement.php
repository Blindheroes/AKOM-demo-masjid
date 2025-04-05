<?php

namespace App\Filament\Resources\ManagementResource\Pages;

use App\Filament\Resources\ManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateManagement extends CreateRecord
{
    protected static string $resource = ManagementResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
