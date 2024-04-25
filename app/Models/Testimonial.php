<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order' => 'integer',
        'deleted_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($testimonial) {
            $uuid = Uuid::uuid4()->toString();
            $testimonial->uuid = str_replace('-', '', $uuid);
        });
    }
  
    public function setFeaturedImageAttribute($value)
    {
        if( $value != null)
        {
            $this->attributes['featured_image'] = "uploads/" . $value; // Store the URL
        }
    }
    
    public static function getForm(): array
    {
        return [
            Section::make('Testimonial Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->maxLength(255),
                    TextInput::make('type')
                        ->maxLength(255),
                    Select::make('category')
                        ->options([
                            'women-health' => 'Women Health',
                            'physiotherapy' => 'physiotherapy',
                            'yoga' => 'Yoga',
                        ])
                        ->required(),

                    RichEditor::make('content')
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    TextInput::make('featured_image')
                        ->label('Image Thumbnail Link'),
                    TextInput::make('featured_video')
                        ->label('Video Link'),
                    TextInput::make('order')
                        ->numeric(),
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
                    TextInput::make('featured_image')
                        ->label('Image Thumbnail Link'),
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
