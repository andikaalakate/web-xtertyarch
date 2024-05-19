<?php

namespace App\Filament\Resources\HomeHeaderResource\Pages;

use App\Filament\Resources\HomeHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeHeaders extends ListRecords
{
    protected static string $resource = HomeHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
