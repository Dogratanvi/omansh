<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Form;          
use Filament\Tables;
use Filament\Tables\Table;        
use Filament\Resources\Resource;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Announcements';
    protected static ?string $navigationGroup = 'Website Content';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('message')
                ->label('Announcement Message')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('link')
                ->label('Optional Link')
                ->nullable() // ✅ allows it to be empty
                ->maxLength(255)
                ->placeholder('https://example.com')
                ->rule('nullable|url'), // ✅ validates URL only if present

            Forms\Components\Toggle::make('status')
                ->label('Active')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('message')->label('Message')->limit(50),
                Tables\Columns\TextColumn::make('link')->label('Link')->limit(40),
                Tables\Columns\IconColumn::make('status')->boolean()->label('Active'),
                Tables\Columns\TextColumn::make('created_at')->date(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
