<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeFeatureResource\Pages;
use App\Filament\Resources\HomeFeatureResource\RelationManagers;
use App\Models\HomeFeature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class HomeFeatureResource extends Resource
{
    protected static ?string $model = HomeFeature::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationLabel = 'Feature';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tx_description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\KeyValue::make('list_check')
                    ->keyLabel('List')
                    ->valueLabel('Isi')
                    ->addActionLabel('Tambah')
                    ->required()
                    ->label('List Check'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->label('Image About')
                    ->required()
                    ->directory('uploads/images/home-features')
                    ->dehydrateStateUsing(function ($state) {
                        if (is_string($state)) {
                            return json_encode([
                                'path' => $state,
                                'name' => pathinfo($state, PATHINFO_FILENAME),
                                'extension' => pathinfo($state, PATHINFO_EXTENSION),
                                'size' => Storage::disk('public')->size($state),
                            ]);
                        }
                        return $state;
                    }),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tx_description')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->sortable(),
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
            'index' => Pages\ListHomeFeatures::route('/'),
            'create' => Pages\CreateHomeFeature::route('/create'),
            'edit' => Pages\EditHomeFeature::route('/{record}/edit'),
        ];
    }
}
