<?php

namespace App\Filament\Widgets;

use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class EventsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'events';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Events';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

        $currentDate = Carbon::now();

        // Get upcoming events count
        $upcomingEventsCount = Events::where('date_from', '>=', $currentDate)->count();

        // Get past events count
        $pastEventsCount = Events::where('date_from', '<', $currentDate)->count();

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'BasicBarChart',
                    'data' =>  [$upcomingEventsCount, $pastEventsCount],
                ],
            ],
            'xaxis' => [
                'categories' =>['Upcoming Events', 'Past Events'],
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'colors' => ['#f59e0b'],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 3,
                    'horizontal' => true,
                ],
            ],
        ];
    }
}
