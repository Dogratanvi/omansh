<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class TasksChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'contactEnquiry';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Contact Enquiry';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

        $contacts = Contact::select('service', DB::raw('COUNT(*) as count'))
            ->groupBy('service')
            ->get();

        $data = [];

        foreach ($contacts as $contact) {
           $value = str_replace('_',' ',$contact->service);
           $data['service'][] = ucwords($value);
            $data['counts'][] = $contact->count;
        }
     
        $count = array_map('strval', $data['counts']);
        $service = array_map('strval', $data['service']);
      
      

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Contact Enquiry',
                    'data' => $count,
                ],
            ],
            'xaxis' => [
                'categories' => $service,
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
            'stroke' => [
                'curve' => 'smooth',
            ],
        ];
    }
}
