<?php

namespace App\Filament\Resources\HomeTideResource\Pages;

use App\Filament\Resources\HomeTideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeTides extends ListRecords
{
    protected static string $resource = HomeTideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
