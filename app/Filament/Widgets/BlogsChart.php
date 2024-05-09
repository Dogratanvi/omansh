<?php

namespace App\Filament\Widgets;


use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BlogsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'blogsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Blogs';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $blogs = Blog::select('category', DB::raw('COUNT(*) as count'))
        ->groupBy('category')
        ->get();
        
        $data =[];

        foreach ($blogs as $blog) {
            $value = str_replace('_',' ',$blog->category);
            $data['category'][] = ucwords($value);
             $data['counts'][] = $blog->count;
         }
      
         $count = array_map('strval', $data['counts']);
         $category = array_map('strval', $data['category']);
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Blogs',
                    'data' => $count,
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
        ];
    }
}
