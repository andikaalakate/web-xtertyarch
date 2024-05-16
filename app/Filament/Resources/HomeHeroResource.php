<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeHeroResource\Pages;
use App\Filament\Resources\HomeHeroResource\RelationManagers;
use App\Models\HomeHero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class HomeHeroResource extends Resource
{
    protected static ?string $model = HomeHero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->multiple()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->label('Image Hero')
                    ->required()
                    ->directory('uploads/images/home-heroes')
                    ->dehydrateStateUsing(function ($state) {
                        if (is_string($state)) {
                            // Generate JSON data for the uploaded image
                            return json_encode([
                                'path' => $state,
                                'name' => pathinfo($state, PATHINFO_FILENAME),
                                'extension' => pathinfo($state, PATHINFO_EXTENSION),
                                'size' => Storage::disk('public')->size($state),
                            ]);
                        }
                        return $state;
                    }),
                Forms\Components\TextInput::make('btx_explore')
                    ->label('Button Text Explore')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('btx_contact')
                    ->label('Button Text Contact')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_explore')
                    ->label('Link Explore')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_contact')
                    ->label('Link Contact')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image Hero'),
                Tables\Columns\TextColumn::make('btx_explore')
                    ->label('Button Text Explore')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btx_contact')
                    ->label('Button Text Contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_explore')
                    ->label('Link Explore')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_contact')
                    ->label('Link Contact')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListHomeHeroes::route('/'),
            'create' => Pages\CreateHomeHero::route('/create'),
            'edit' => Pages\EditHomeHero::route('/{record}/edit'),
        ];
    }
}
