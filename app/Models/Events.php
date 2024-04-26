<?php

namespace App\Models;

use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Events extends Model
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
        'date_from' => 'datetime',
        'date_to' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($about) {
            $uuid = Uuid::uuid4()->toString();
            $about->uuid=str_replace('-', '', $uuid);
        });
    }

    public function setFeaturedImageAttribute($value)
    {
        if( $value != null)
        {
            $this->attributes['featured_image'] = env('APP_URL') . '/' ."uploads/" . $value; // Store the URL
        }
    }

    public function setSlugAttribute($title)
    {
        dd('1');
    }

    public static function getForm(): array
    {
        return [
            Section::make('Event Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->maxLength(255),
                    RichEditor::make('content')
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    FileUpload::make('featured_image')
                        ->image()
                        ->columnSpanFull(),
                    DateTimePicker::make('date_from'),
                    DateTimePicker::make('date_to'),
                    TextInput::make('location')
                    ->maxLength(255),
                    TextInput::make('order')
                        ->maxLength(255),
                ]),
            Section::make('Meta Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some meta information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('meta_title')
                        ->maxLength(255),
                    TextInput::make('meta_keywords')
                        ->maxLength(255),
                    Textarea::make('meta_descriptions')
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    FileUpload::make('meta_og_image')
                        ->image(),
                    TextInput::make('meta_og_url')
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
