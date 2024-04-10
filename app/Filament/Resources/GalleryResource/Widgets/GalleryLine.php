<?php

namespace App\Filament\Resources\GalleryResource\Widgets;

use Filament\Widgets\ChartWidget;

class GalleryLine extends ChartWidget
{
    protected static ?string $heading = 'Gallery';

    protected int | string | array $columnSpan = 'full';

    protected static ?string $maxHeight = '200px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
