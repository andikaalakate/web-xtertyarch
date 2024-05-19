<?php

namespace App\Filament\Resources\HomeProjectResource\Pages;

use App\Filament\Resources\HomeProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeProject extends EditRecord
{
    protected static string $resource = HomeProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
