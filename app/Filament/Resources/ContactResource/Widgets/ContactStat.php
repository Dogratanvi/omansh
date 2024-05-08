<?php

namespace App\Filament\Resources\ContactResource\Widgets;

use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContactStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Women Health', Contact::where('service','women_health')->count())
            ->color('success'),
        Stat::make('Physiotherapy', Contact::where('service','physiotherapy')->count())
            ->color('success'),
        Stat::make('Yoga', Contact::where('service','yoga')->count())
            ->color('success'),
        ];
    }
}
