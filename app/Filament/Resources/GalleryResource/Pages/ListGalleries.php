<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Filament\Resources\GalleryResource\Widgets\GalleryLine;
use App\Filament\Resources\GalleryResource\Widgets\GalleryStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            GalleryStat::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Add Gallery')
            ->icon('heroicon-s-plus'),
        ];
    }
}
