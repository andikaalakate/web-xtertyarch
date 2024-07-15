<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeAboutResource\Pages;
use App\Filament\Resources\HomeAboutResource\RelationManagers;
use App\Models\HomeAbout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class HomeAboutResource extends Resource
{
    protected static ?string $model = HomeAbout::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationLabel = 'About';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\KeyValue::make('tx_title')
                    ->keyLabel('Title')
                    ->valueLabel('Isi')
                    ->addActionLabel('Tambah')
                    ->required()
                    ->label('Title'),
                Forms\Components\KeyValue::make('tx_description')
                    ->keyLabel('Description')
                    ->valueLabel('Isi')
                    ->addActionLabel('Tambah')
                    ->required()
                    ->label('Description'),
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
                ->directory('uploads/images/home-abouts')
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
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListHomeAbouts::route('/'),
            'create' => Pages\CreateHomeAbout::route('/create'),
            'edit' => Pages\EditHomeAbout::route('/{record}/edit'),
        ];
    }
}
