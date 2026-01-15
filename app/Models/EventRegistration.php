<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Fieldset;

class EventRegistration extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'registration_id',
        'landing_page_name',
        'aadhaar_number',
        'payment',
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'address',
        'city',
        'state',
        'pincode',
        'country',
        'profile_picture',
        'special_requirements',
        'emergency_contact_name',
        'emergency_contact_phone',
        'event_name',
        'event_location',
        'event_date_from',
        'event_date_to',
        'registration_status',
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_signature',
        'order_id',
        'currency',
        'amount',
        'status'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'event_date_from' => 'datetime',
        'event_date_to' => 'datetime',
    ];
    
    /**
     * Boot function to generate unique registration ID
     */
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($registration) {
            if (empty($registration->registration_id)) {
                $registration->registration_id = self::generateUniqueRegistrationId();
            }
        });
        
        // Increment event participants when registration is confirmed
        static::created(function ($registration) {
            if ($registration->registration_status === 'confirmed' && $registration->event) {
                $registration->event->incrementParticipants();
            }
        });
        
        // Handle status changes
        static::updated(function ($registration) {
            if ($registration->isDirty('registration_status')) {
                $oldStatus = $registration->getOriginal('registration_status');
                $newStatus = $registration->registration_status;
                
                if ($oldStatus !== 'confirmed' && $newStatus === 'confirmed') {
                    $registration->event?->incrementParticipants();
                } elseif ($oldStatus === 'confirmed' && $newStatus !== 'confirmed') {
                    $registration->event?->decrementParticipants();
                }
            }
        });
    }
    
    /**
     * Get the event this registration belongs to
     */
    public function event()
    {
        return $this->belongsTo(Events::class, 'event_id');
    }
    
    /**
     * Generate unique registration ID (16 characters minimum)
     */
    public static function generateUniqueRegistrationId()
    {
        do {
            $registrationId = 'EVT' 
                . date('Y') 
                . date('m') 
                . strtoupper(Str::random(9));
        } while (self::where('registration_id', $registrationId)->exists());
        
        return $registrationId;
    }
    
    /**
     * Get full name
     */
    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }
    
    /**
     * Get masked Aadhaar number
     */
    public function getMaskedAadhaarAttribute()
    {
        return 'XXXX-XXXX-' . substr($this->aadhaar_number, -4);
    }
    
    /**
     * Get profile picture URL
     */
    public function getProfilePictureUrlAttribute()
    {
        if (empty($this->profile_picture)) {
            return asset('images/default-avatar.png');
        }

        // Check if already a full URL
        if (filter_var($this->profile_picture, FILTER_VALIDATE_URL)) {
            return $this->profile_picture;
        }

        // Return storage URL
        return asset('storage/' . $this->profile_picture);
    }
    
    /**
     * Scope for confirmed registrations
     */
    public function scopeConfirmed($query)
    {
        return $query->where('registration_status', 'confirmed');
    }
    
    /**
     * Scope for pending registrations
     */
    public function scopePending($query)
    {
        return $query->where('registration_status', 'pending');
    }
    
    /**
     * Filament Form Schema
     */
    public static function getForm(): array
    {
        return [
            Section::make('Event Selection')
                ->columns(2)
                ->collapsible()
                ->description('Select the event for this registration.')
                ->icon('heroicon-o-calendar')
                ->schema([
                    TextInput::make('landing_page_name')
                        ->label('Landing Page Name')
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('registration_id')
                        ->label('Registration ID')
                        ->disabled()
                        ->dehydrated()
                        ->default(fn () => self::generateUniqueRegistrationId())
                        ->maxLength(255),
                ]),
            
            Section::make('Personal Information')
                ->columns(2)
                ->collapsible()
                ->description('Enter participant personal details.')
                ->icon('heroicon-o-user')
                ->schema([
                    TextInput::make('first_name')
                        ->label('First Name')
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('last_name')
                        ->label('Last Name')
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('aadhaar_number')
                        ->label('Aadhaar Number')
                        ->required()
                        ->numeric()
                        ->length(12)
                        ->placeholder('Enter 12-digit Aadhaar number')
                        ->unique(ignoreRecord: true)
                        ->columnSpanFull(),
                    
                    DatePicker::make('date_of_birth')
                        ->label('Date of Birth')
                        ->required()
                        ->maxDate(now()->subYears(5))
                        ->displayFormat('d/m/Y'),
                    
                    Select::make('gender')
                        ->label('Gender')
                        ->required()
                        ->options([
                            'male' => 'Male',
                            'female' => 'Female',
                            'other' => 'Other',
                        ]),
                    
                    FileUpload::make('profile_picture')
                        ->label('Profile Picture')
                        ->image()
                        ->imageEditor()
                        ->maxSize(2048)
                        ->directory('event-registrations/profiles')
                        ->preserveFilenames()
                        ->columnSpanFull(),
                ]),
            
            Section::make('Contact Information')
                ->columns(2)
                ->collapsible()
                ->description('Provide contact details.')
                ->icon('heroicon-o-phone')
                ->schema([
                    TextInput::make('email')
                        ->label('Email Address')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('phone')
                        ->label('Phone Number')
                        ->tel()
                        ->required()
                        ->maxLength(15)
                        ->placeholder('+91 1234567890'),
                ]),
            
            Section::make('Address Details')
                ->columns(2)
                ->collapsible()
                ->description('Enter complete address information.')
                ->icon('heroicon-o-map-pin')
                ->schema([
                    Textarea::make('address')
                        ->label('Street Address')
                        ->required()
                        ->rows(3)
                        ->maxLength(500)
                        ->columnSpanFull(),
                    
                    TextInput::make('city')
                        ->label('City')
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('state')
                        ->label('State')
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('pincode')
                        ->label('PIN Code')
                        ->required()
                        ->numeric()
                        ->length(6)
                        ->placeholder('Enter 6-digit PIN code'),
                    
                    TextInput::make('country')
                        ->label('Country')
                        ->required()
                        ->default('India')
                        ->maxLength(255),
                ]),
            
            Fieldset::make('Registration Status')
                ->schema([
                    Select::make('registration_status')
                        ->label('Status')
                        ->required()
                        ->default('pending')
                        ->options([
                            'pending' => 'Pending',
                            'confirmed' => 'Confirmed',
                            'cancelled' => 'Cancelled',
                            'waitlisted' => 'Waitlisted',
                        ])
                        ->native(false),
                ])
        ];
    }
}