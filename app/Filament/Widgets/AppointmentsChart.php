<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class AppointmentsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'appointmentsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Appointments';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

        $bookings = Booking::selectRaw('MONTHNAME(created_at) as month, count(*) as count')
            ->groupBy('month')
        ->get();

        $data =[];
      

        foreach ($bookings as $booking) {
        
            $value = str_replace('_',' ',$booking->month);
            $data['month'][] = ucwords($value);
             $data['counts'][] = $booking->count;
         }
      
         $count = array_map('strval', $data['counts']);
         $month = array_map('strval', $data['month']);


        return [
            'chart' => [
                'type' => 'pie',
                'height' => 300,
            ],
            'series' =>$count,
            'labels' =>$month,
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
