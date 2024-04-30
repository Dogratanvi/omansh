<?php

namespace App\Filament\Resources\AboutOmanshResource\Pages;

use App\Filament\Resources\AboutOmanshResource;
use Filament\Actions;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Pages\ListRecords;

class ListAboutOmanshes extends ListRecords
{
    protected static string $resource = AboutOmanshResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Add About Omansh')
            ->icon('heroicon-s-plus'),
        ];
    }


}
