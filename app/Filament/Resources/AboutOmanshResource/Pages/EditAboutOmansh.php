<?php

namespace App\Filament\Resources\AboutOmanshResource\Pages;

use App\Filament\Resources\AboutOmanshResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutOmansh extends EditRecord
{
    protected static string $resource = AboutOmanshResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
