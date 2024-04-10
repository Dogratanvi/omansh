<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Filament\Resources\ContactResource\Widgets\ContactChart;
use App\Filament\Resources\ContactResource\Widgets\ContactStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
          
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ContactStat::class,
            ContactChart::class,
        ];
    }
}
