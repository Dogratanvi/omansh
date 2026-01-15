<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventRegistrationResource\Pages;
use App\Filament\Resources\EventRegistrationResource\RelationManagers;
use App\Models\EventRegistration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Notifications\Notification;

class EventRegistrationResource extends Resource
{
    protected static ?string $model = EventRegistration::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';
    
    protected static ?string $navigationLabel = 'Event Registrations';
    
    protected static ?string $modelLabel = 'Event Registration';
    
    protected static ?string $pluralModelLabel = 'Event Registrations';
    
    protected static ?string $navigationGroup = 'Events Management';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema(EventRegistration::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('registration_id')
                    ->label('Registration ID')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Registration ID copied!')
                    ->weight('bold')
                    ->icon('heroicon-m-hashtag'),
                
               
               
                
                TextColumn::make('full_name')
                    ->label('Participant Name')
                    ->searchable(['first_name', 'last_name'])
                    ->sortable()
                    ->weight('medium'),
                
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->icon('heroicon-m-envelope')
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->icon('heroicon-m-phone')
                    ->copyable()
                    ->toggleable(),
                
                TextColumn::make('masked_aadhaar')
                    ->label('Aadhaar')
                    ->icon('heroicon-m-identification')
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('city')
                    ->label('City')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                
                TextColumn::make('state')
                    ->label('State')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                BadgeColumn::make('registration_status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'confirmed',
                        'danger' => 'cancelled',
                        'info' => 'waitlisted',
                    ])
                    ->icons([
                        'heroicon-o-clock' => 'pending',
                        'heroicon-o-check-circle' => 'confirmed',
                        'heroicon-o-x-circle' => 'cancelled',
                        'heroicon-o-queue-list' => 'waitlisted',
                    ])
                    ->sortable(),
                
                TextColumn::make('date_of_birth')
                    ->label('Date of Birth')
                    ->date('d M, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('gender')
                    ->label('Gender')
                    ->badge()
                    ->colors([
                        'primary' => 'male',
                        'success' => 'female',
                        'warning' => 'other',
                    ])
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('created_at')
                    ->label('Registered On')
                    ->dateTime('d M, Y H:i')
                    ->sortable()
                    ->toggleable(),
                
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('event_id')
                    ->label('Event')
                    ->relationship('event', 'name')
                    ->searchable()
                    ->preload(),
                
                SelectFilter::make('registration_status')
                    ->label('Registration Status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                        'waitlisted' => 'Waitlisted',
                    ])
                    ->multiple(),
                
                SelectFilter::make('gender')
                    ->label('Gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other',
                    ]),
                
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('registered_from')
                            ->label('Registered From'),
                        Forms\Components\DatePicker::make('registered_until')
                            ->label('Registered Until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['registered_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['registered_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                
                Tables\Actions\EditAction::make(),
                
                Tables\Actions\Action::make('confirm')
                    ->label('Confirm')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (EventRegistration $record) => $record->registration_status !== 'confirmed')
                    ->action(function (EventRegistration $record) {
                        $record->update(['registration_status' => 'confirmed']);
                        
                        Notification::make()
                            ->title('Registration Confirmed')
                            ->success()
                            ->body("Registration for {$record->full_name} has been confirmed.")
                            ->send();
                    }),
                
                Tables\Actions\Action::make('cancel')
                    ->label('Cancel')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(fn (EventRegistration $record) => $record->registration_status !== 'cancelled')
                    ->action(function (EventRegistration $record) {
                        $record->update(['registration_status' => 'cancelled']);
                        
                        Notification::make()
                            ->title('Registration Cancelled')
                            ->warning()
                            ->body("Registration for {$record->full_name} has been cancelled.")
                            ->send();
                    }),
                
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('confirm_selected')
                        ->label('Confirm Selected')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $records->each->update(['registration_status' => 'confirmed']);
                            
                            Notification::make()
                                ->title('Registrations Confirmed')
                                ->success()
                                ->body(count($records) . ' registration(s) have been confirmed.')
                                ->send();
                        }),
                    
                    Tables\Actions\BulkAction::make('cancel_selected')
                        ->label('Cancel Selected')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $records->each->update(['registration_status' => 'cancelled']);
                            
                            Notification::make()
                                ->title('Registrations Cancelled')
                                ->warning()
                                ->body(count($records) . ' registration(s) have been cancelled.')
                                ->send();
                        }),
                    
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->poll('30s')
            ->striped();
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventRegistrations::route('/'),
            'create' => Pages\CreateEventRegistration::route('/create'),
            'view' => Pages\ViewEventRegistration::route('/{record}'),
            'edit' => Pages\EditEventRegistration::route('/{record}/edit'),
        ];
    }
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('registration_status', 'pending')->count();
    }
    
    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}