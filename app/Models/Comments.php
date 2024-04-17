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

     /*
     * Get the owning commentable model.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    public function getPostAttribute()
    {
        if ($this->commentable_type === 'App\Models\Blog') {
            return $this->commentable;
        }

        return [];
    }

    public function getModuleNameAttribute()
    {
        if ($this->commentable_type === 'App\Models\Blog') {
            return 'posts';
        }

        return '';
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Comment', 'parent_id');
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
                    TextInput::make('name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->maxLength(255),
                    RichEditor::make('content')
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    FileUpload::make('featured_image')
                        ->multiple()
                        ->image(),
                    TextInput::make('order')
                        ->numeric(),
                ]),
    
            Fieldset::make('Status')
                ->schema([
                    Toggle::make('status')
                        ->required(),
                ])
        ];
    }
}
