<?php

namespace App\Filament\Widgets;

use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class Testimonials extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'testimonials';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Testimonials';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

        $contacts = Testimonial::select('category', DB::raw('COUNT(*) as count'))
        ->groupBy('category')
        ->get();

    $data = [];

    foreach ($contacts as $contact) {
       $value = str_replace('_',' ',$contact->category);
       $data['category'][] = ucwords($value);
        $data['counts'][] = $contact->count;
    }
 
    $count = array_map('strval', $data['counts']);
    $category = array_map('strval', $data['category']);
        return [
            'chart' => [
                'type' => 'area',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Testimonials',
                    'data' => $count
                ],
            ],
            'xaxis' => [
                'categories' => $category,
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
            'dataLabels' => [
                'enabled' => false,
            ],
        ];
    }
}
