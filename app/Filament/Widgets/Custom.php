<?php

namespace App\Filament\Widgets;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Widgets\Widget;

class Custom extends Widget implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;
    protected static string $view = 'filament.widgets.custom';

    public function callNotification(): Action
    { 
        return Action::make('callNotification')
        ->button()
        ->color('warning')
        ->label('Send a notification')
        ->action(function(){
            Notification::make()->warning()->title('You have a notification')
            ->body('This is a test')
            ->persistent()
            ->actions([
                \Filament\Notifications\Actions\Action::make('sendNotification')
                ->button()
                ->color('primary')
            ])
            ->duration(500)
            ->send();

        });
    }
}