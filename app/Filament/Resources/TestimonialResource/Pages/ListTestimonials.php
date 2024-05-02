<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use App\Filament\Resources\TestimonialResource;
use App\Models\Testimonial;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListTestimonials extends ListRecords
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Add Testimonial')
            ->icon('heroicon-s-plus'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Testimonials'),
            'women-health' => Tab::make('Women Health')
                ->modifyQueryUsing(function ($query){
                    return $query->where('category', 'women-health');
                }),
            'physiotherapy' => Tab::make('Physiotherapy')
                ->modifyQueryUsing(function ($query) {
                    return $query->where('category','physiotherapy');
                }),
            'yoga' => Tab::make('Yoga')
                ->modifyQueryUsing(function ($query) {
                    return $query->where('category', 'yoga');
                }),
            'corporate-training' => Tab::make('Corporate Training')
                ->modifyQueryUsing(function ($query) {
                    return $query->where('category', 'corporate-training');
                }),
         ];
    }
}
