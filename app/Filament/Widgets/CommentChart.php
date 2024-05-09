<?php

namespace App\Filament\Widgets;

use App\Models\Comments;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class CommentChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'commentChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Comments Count';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

        $comments = Comments::select('body', DB::raw('COUNT(*) as count'))
        ->groupBy('body')
        ->get();
        
        $data =[];

        foreach ($comments as $comment) {
            $value = str_replace('_',' ',$comment->category);
            $data['body'][] = ucwords($value);
             $data['counts'][] = $comment->count;
         }
      
         $count = array_map('strval', $data['counts']);
         $body = array_map('strval', $data['body']);

        return [
            'chart' => [
                'type' => 'line',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Comment',
                    'data' => $count
                ],
            ],
            'xaxis' => [
                'categories' => $body,
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
