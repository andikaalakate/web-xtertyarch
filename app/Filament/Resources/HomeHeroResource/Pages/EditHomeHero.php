<?php

namespace App\Filament\Resources\HomeHeroResource\Pages;

use App\Filament\Resources\HomeHeroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeHero extends EditRecord
{
    protected static string $resource = HomeHeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
