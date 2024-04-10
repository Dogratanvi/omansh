<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Setting extends Model
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

        static::creating(function ($setting) {
            $uuid = Uuid::uuid4()->toString();
            $setting->uuid=str_replace('-', '', $uuid);
        });
    }

    public static function getForm(): array
    {
        return [
            Section::make('Setting Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('value')
                        ->required()
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
