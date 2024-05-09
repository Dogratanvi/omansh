<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Feedback extends Model
{
    use HasFactory;

      /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deleted_at' => 'datetime',
        'like_most_about_class' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($about) {
            $uuid = Uuid::uuid4()->toString();
            $about->uuid=str_replace('-', '', $uuid);
        });
    }

    public static function getForm():array
    {
        return [
            Section::make('Feedback Details')
            ->columns(2)
            ->collapsible()
            ->description('Provide some basic information.')
            ->icon('heroicon-o-chevron-right')
            ->schema([
                TextInput::make('like_most_about_class')
                    ->required()
                    ->maxLength(255),
                TextInput::make('teacher_knowledge')
                    ->maxLength(255),
                Toggle::make('instruction_given'),
                TextInput::make('yoga_sequence')
                    ->maxLength(255),
                TextInput::make('meet_your_expectations')
                    ->maxLength(255),
                Textarea::make('like_about_class')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Textarea::make('help_us_improve')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('hear_about_omansh')
                    ->maxLength(255),
            ]),
            Fieldset::make('Status')
            ->schema([
                Toggle::make('status')
                ->required(),
            ])

        ];


    }
}
