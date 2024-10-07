<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShortUrlResource\Pages;
use App\Filament\Resources\ShortUrlResource\RelationManagers;
use App\Models\ShortUrl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use AshAllenDesign\ShortURL\Classes\Builder as ShortURLBuilder;

class ShortUrlResource extends Resource
{
    protected static ?string $model = ShortUrl::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('destination_url')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('url_key')
                    ->required()
                    ->maxLength(255),
            ])
            ->afterFill(function (Form $form) {
                app(ShortURLBuilder::class)->destinationUrl($form->get('destination_url'))->urlKey($form->get('url_key'))->make();
            });
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('url_key')
                    ->searchable(),
                Tables\Columns\TextColumn::make('default_short_url')
                    ->searchable(),
                Tables\Columns\IconColumn::make('single_use')
                    ->boolean(),
                Tables\Columns\IconColumn::make('forward_query_params')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_visits')
                    ->boolean(),
                Tables\Columns\TextColumn::make('redirect_status_code')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('track_ip_address')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_operating_system')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_operating_system_version')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_browser')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_browser_version')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_referer_url')
                    ->boolean(),
                Tables\Columns\IconColumn::make('track_device_type')
                    ->boolean(),
                Tables\Columns\TextColumn::make('activated_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deactivated_at')
                    ->dateTime()
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
            'index' => Pages\ListShortUrls::route('/'),
            'create' => Pages\CreateShortUrl::route('/create'),
            'edit' => Pages\EditShortUrl::route('/{record}/edit'),
        ];
    }

    public static function generateShortUrl()
    {
        return [
            //
        ];
    }
}
