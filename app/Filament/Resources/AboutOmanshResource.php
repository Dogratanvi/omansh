<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutOmanshResource\Pages;
use App\Filament\Resources\AboutOmanshResource\RelationManagers;
use App\Models\AboutOmansh;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutOmanshResource extends Resource
{
    protected static ?string $model = AboutOmansh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'About';

    protected static ?string $navigationLabel = 'About Omansh';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                AboutOmansh::getForm()
            );
    }

    public static function getModelLabel(): string
    {
        return __('About Omansh');
    }

    public static function getPluralModelLabel(): string
    {
        return __('About Omansh');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('uuid')
                    ->label('UUID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('order')
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListAboutOmanshes::route('/'),
            'create' => Pages\CreateAboutOmansh::route('/create'),
            'edit' => Pages\EditAboutOmansh::route('/{record}/edit'),
        ];
    }
}
