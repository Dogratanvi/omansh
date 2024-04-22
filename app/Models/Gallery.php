<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
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

        static::creating(function ($gallery) {
            $uuid = Uuid::uuid4()->toString();
            $gallery->uuid=str_replace('-', '', $uuid);

        });

    }

    public function setFeaturedImageAttribute($value)
    {
        if( $this->attributes['featured_image'] == null)
        {
            $this->attributes['featured_image'] = "uploads/" . $value; // Store the URL
        }
    }

    

    public static function getForm(): array
    {
        return [
            Section::make('Gallery Details')
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
                    FileUpload::make('featured_image')
                        ->image()
                        ->imageEditor()
                        ->disk('public')
                        ->directory('uploads')
                        ->visibility('public')
                        ->fetchFileInformation(false)
                        ->preserveFilenames()
                        ->imageEditorAspectRatios([
                            null,
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),
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
