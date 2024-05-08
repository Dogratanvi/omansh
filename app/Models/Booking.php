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


class Booking extends Model
{
    use HasFactory;

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


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $uuid = Uuid::uuid4()->toString();
            $blog->uuid = str_replace('-', '', $uuid);
        });
    }

    public static function getForm(): array
    {
        return [
            Section::make('Booking Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('name')
                        ->maxLength(255),
                    TextInput::make('phone')
                        ->tel()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->email()
                        ->maxLength(255),
                    DateTimePicker::make('date_time'),
                    TextInput::make('service')
                        ->maxLength(255),
                    TextInput::make('message')
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
