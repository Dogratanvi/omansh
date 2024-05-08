<?php

namespace App\Filament\Resources\GalleryResource\Widgets;

use App\Models\Gallery;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GalleryStat extends BaseWidget
{
    
    protected function getStats(): array
    {
        return [
            Stat::make('Galleries Count', Gallery::count())
                ->color('success'),
            Stat::make('Active Galleries', Gallery::where('status', 1)->count())
                ->color('success'),
            Stat::make('Galleries Created Today', Gallery::whereDate('created_at', today())->count())
                ->color('success'),
                
        ];
    }
}
