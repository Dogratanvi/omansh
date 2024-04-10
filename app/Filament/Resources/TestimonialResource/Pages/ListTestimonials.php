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
            Actions\CreateAction::make(),
        ];
    }

    // public function getTabs(): array
    // {
    //     return [
    //         'all' => Tab::make('All Testimonials'),
    //         'women_health' => Tab::make('Approved')
    //             ->modifyQueryUsing(function ($query) {
    //                 return $query->where('category', Testimonial::women_health'));
    //             }),
    //         // 'physiotherapy' => Tab::make('Submitted')
    //         //     ->modifyQueryUsing(function ($query) {
    //         //         return $query->where('category', TalkStatus::SUBMITTED);
    //         //     }),
    //         // 'yoga' => Tab::make('Rejected')
    //         //     ->modifyQueryUsing(function ($query) {
    //         //         return $query->where('category', TalkStatus::REJECTED);
    //         //     }),
    //     ];
    // }
}
