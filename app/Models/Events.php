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
use AmidEsfahani\FilamentTinyEditor\TinyEditor;

use Illuminate\Support\Str;
use Filament\Forms;
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
        'images' => 'array'
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
    
     public function setImagesAttribute($value)
    {
        if( $value != null)
        {
            $this->attributes['images'] = env('APP_URL') . '/' ."uploads/" . $value; // Store the URL
        }
    }
    
     /**
     * Get all registrations for this event
     */
    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    /**
     * Get confirmed registrations only
     */
    public function confirmedRegistrations()
    {
        return $this->hasMany(EventRegistration::class)->where('registration_status', 'confirmed');
    }

    /**
     * Check if event is full
     */
    public function isFull()
    {
        if (!$this->max_participants) {
            return false;
        }
        return $this->current_participants >= $this->max_participants;
    }

    /**
     * Get available slots
     */
    public function getAvailableSlotsAttribute()
    {
        if (!$this->max_participants) {
            return 'Unlimited';
        }
        return max(0, $this->max_participants - $this->current_participants);
    }

    /**
     * Increment participant count
     */
    public function incrementParticipants()
    {
        $this->increment('current_participants');
    }

    /**
     * Decrement participant count
     */
    public function decrementParticipants()
    {
        $this->decrement('current_participants');
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
    ->placeholder('Name')
    ->required()
    ->live(onBlur: true)
    ->maxLength(255)
    ->afterStateUpdated(function (callable $set, $state) {
        $set('slug', Str::slug($state));
    }),

TextInput::make('slug')
    ->required()
    ->maxLength(255),
    // TextInput::make('payment')
    // ->maxLength(255),
  TextInput::make('current_participants')
    ->numeric()
    ->default(0)
    ->maxLength(255),

       TextInput::make('max_participants')
          ->numeric()
    ->maxLength(255),
    
     
 
    // Toggle::make('is_payment_active')
    // ->label('Is Payment Active')
    // ->default(false),


                    TinyEditor::make('content')
                   ->profile('full')
                     ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('uploads')
                        ->maxLength(65535)
                        ->columnSpanFull(),
                   
                    FileUpload::make('featured_image')
                      ->preserveFilenames()
                        ->image()
                        ->columnSpanFull(),
                  FileUpload::make('images')
    ->multiple()
    ->preserveFilenames()
    ->image()
    ->maxFiles(10)
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
                  Toggle::make('is_featured')
                  ->label('Featured')
                    ->default(false),
            ])
           
        ];
    }
}
