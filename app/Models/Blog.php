<?php

namespace App\Models;

use App\Traits\SlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Blog extends Model
{
    use HasFactory, SlugTrait;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'published_at' => 'timestamp',
        'deleted_at' => 'datetime',
    ];

    public function setFeaturedImageAttribute($value)
    {
        
        if( $value != null)
        {
            $this->attributes['featured_image'] = "uploads/" . $value; // Store the URL
        }
    }

     /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->hasMany(Comments::class)->whereNull('parent_id')->where('status',1);
    }  

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $uuid = Uuid::uuid4()->toString();
            $blog->uuid=str_replace('-', '', $uuid);
            $blog->slug = $blog->generateSlug($blog->title);
        });

        // static::creating(function ($blog) {
        //     $blog->slug = $blog->generateSlug($blog->title);
        // });
    }

    public static function getForm(): array
    {
        return [
            Section::make('Blog Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(191),
                    TextInput::make('slug')
                        ->maxLength(255),
                    TextInput::make('author')
                        ->maxLength(255),
                    Select::make('category')
                        ->options([
                            'WOMEN HEALTH' => 'WOMEN HEALTH',
                            'PHYSIOTHERAPY' => 'PHYSIOTHERAPY',
                            'YOGA' => 'YOGA',
                        ])
                        ->required(),
                    TextInput::make('intro')
                        ->columnSpanFull()
                        ->maxLength(255),
                    RichEditor::make('content')
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    FileUpload::make('featured_image')
                        ->columnSpanFull()
                        ->image(),
                    DateTimePicker::make('published_at'),
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