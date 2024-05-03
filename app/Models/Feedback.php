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
                Forms\Components\TextInput::make('uuid')
                    ->label('UUID')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('like_most_about_class')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teacher_knowledge')
                    ->maxLength(255),
                Forms\Components\Toggle::make('instruction_given'),
                Forms\Components\TextInput::make('yoga_sequence')
                    ->maxLength(255),
                Forms\Components\TextInput::make('meet_your_exceptations')
                    ->maxLength(255),
                Forms\Components\Textarea::make('like_about_class')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('help_us_improve')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('hear_about_omansh')
                    ->maxLength(255),
                Forms\Components\TextInput::make('order')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);

        ];


    }
}
