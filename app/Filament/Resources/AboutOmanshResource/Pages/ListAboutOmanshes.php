<?php

namespace App\Filament\Resources\AboutOmanshResource\Pages;

use App\Filament\Resources\AboutOmanshResource;
use Filament\Actions;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Pages\ListRecords;

class ListAboutOmanshes extends ListRecords
{
    protected static string $resource = AboutOmanshResource::class;

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Testimonials'),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
