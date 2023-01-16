<?php

namespace App\Filament\Resources\ContactEntryResource\Pages;

use App\Filament\Resources\ContactEntryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactEntries extends ListRecords
{
    protected static string $resource = ContactEntryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
