<?php

namespace App\Filament\Resources\HomeProjectResource\Pages;

use App\Filament\Resources\HomeProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeProjects extends ListRecords
{
    protected static string $resource = HomeProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
