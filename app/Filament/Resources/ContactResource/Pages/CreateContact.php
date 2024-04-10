<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function afterCreate(): void
    {
        $contact = $this->contact();

        Notification::make()
        ->title('New Contact Created')
        ->body('This is a test')
        ->persistent()
        ->actions([
            \Filament\Notifications\Actions\Action::make('View')->url(
                ContactResource::getUrl('edit',['record' => $contact])
            ),
        ])
        ->duration(500)
        ->send();

    }
}
