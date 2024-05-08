<?php

namespace App\Models;

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

class Comments extends Model
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
    ];
   

    public function setFeaturedImageAttribute($value)
    {
        if( $value != null)
        {
            $this->attributes['featured_image'] = "uploads/" . $value; // Store the URL
        }
    }


    public function replies()
    {
        return $this->hasMany('App\Models\Comments', 'parent_id')->where('status',1);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($slider) {
            $uuid = Uuid::uuid4()->toString();
            $slider->uuid=str_replace('-', '', $uuid);
        });
    }

    public static function getForm(): array
    {
        return [
            Section::make('Comment Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('user_name')
                        ->maxLength(255),
                    TextInput::make('body')
                        ->maxLength(255),
                    TextInput::make('parent_id')
                        ->maxLength(255),
                    TextInput::make('blog_id')
                        ->maxLength(255),
                    TextInput::make('user_ip')
                        ->maxLength(255),
                    TextInput::make('order')
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
