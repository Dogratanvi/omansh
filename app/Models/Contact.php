<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Contact extends Model
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

        static::creating(function ($contact) {
            $uuid = Uuid::uuid4()->toString();
            $contact->uuid = str_replace('-', '', $uuid);
        });
    }

    public static function getForm(): array
    {
        return [
            Section::make('Contact Details')
                ->columns(2)
                ->collapsible()
                ->description('Provide some basic information.')
                ->icon('heroicon-o-chevron-right')
                ->schema([
                    TextInput::make('first_name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('last_name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('phone')
                        ->tel()
                        ->required()
                        ->numeric(),
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    TextInput::make('service')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('message')
                        ->required()
                        ->maxLength(255),
                    Toggle::make('status')
                        ->required(),
                ])
        ];
    }

}
