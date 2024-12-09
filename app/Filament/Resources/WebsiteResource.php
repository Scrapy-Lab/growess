<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteResource\Pages;
use App\Filament\Resources\WebsiteResource\RelationManagers;
use App\Models\Website;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsiteResource extends Resource
{
    protected static ?string $model = Website::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('domain')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('web_hosting')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('web_page')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ssl')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('enquiry_form')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('security_backup')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('hd_quality_images')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('content_writing')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('domain')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('web_hosting')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('web_page')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ssl')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('enquiry_form')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('security_backup')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hd_quality_images')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('content_writing')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListWebsites::route('/'),
            'create' => Pages\CreateWebsite::route('/create'),
            'edit' => Pages\EditWebsite::route('/{record}/edit'),
        ];
    }
}
